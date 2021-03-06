<?php

/*
 * MailWatch for MailScanner
 * Copyright (C) 2003-2011  Steve Freegard (steve@freegard.name)
 * Copyright (C) 2011  Garrod Alwood (garrod.alwood@lorodoes.com)
 * Copyright (C) 2014-2016  MailWatch Team (https://github.com/orgs/mailwatch/teams/team-stable)
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 *
 * In addition, as a special exception, the copyright holder gives permission to link the code of this program with
 * those files in the PEAR library that are licensed under the PHP License (or with modified versions of those files
 * that use the same license as those files), and distribute linked combinations including the two.
 * You must obey the GNU General Public License in all respects for all of the code used other than those files in the
 * PEAR library that are licensed under the PHP License. If you modify this program, you may extend this exception to
 * your version of the program, but you are not obligated to do so.
 * If you do not wish to do so, delete this exception statement from your version.
 *
 * As a special exception, you have permission to link this program with the JpGraph library and distribute executables,
 * as long as you follow the requirements of the GNU GPL in regard to all of the software in the executable aside from
 * JpGraph.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write to the Free
 * Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

// Include of necessary functions
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/filter.inc.php');

// Authentication checking
session_start();
require(__DIR__ . '/login.function.php');

// add the header information such as the logo, search, menu, ....
$filter = html_start(__('topmailrelays39'), 0, false, true);

// File name
$filename = CACHE_DIR . "/top_mail_relays.png." . time();

$sql = "
SELECT
 clientip,
 count(*) AS count,
 sum(virusinfected) AS total_viruses,
 sum(isspam) AS total_spam,
 sum(size) AS size
FROM
 maillog
WHERE
 1=1
" . $filter->CreateSQL() . "
GROUP BY
 clientip
ORDER BY
 count DESC
LIMIT 10";

// Check permissions to see if apache can actually create the file
if (is_writable(CACHE_DIR)) {

    // JpGraph functions
    include_once("./lib/jpgraph/src/jpgraph.php");
    include_once("./lib/jpgraph/src/jpgraph_pie.php");
    include_once("./lib/jpgraph/src/jpgraph_pie3d.php");

    $result = dbquery($sql);
    if (!mysql_num_rows($result) > 0) {
        die(__('diemysql99') . "\n");
    }

    $relay_array = array();

    while ($row = mysql_fetch_object($result)) {
        $data[] = $row->count;
        $hostname = gethostbyaddr($row->clientip);
        if ($hostname == $row->clientip) {
            $data_names[] = __('hostfailed39');
        } else {
            $data_names[] = $hostname;
        }
        $data_ip[] = $row->clientip;
        if ($geoip = return_geoip_country($row->clientip)) {
            $data_geoip[] = $geoip;
        } else {
            $data_geoip[] = __('geoipfailed39');
        }
        $data_virus[] = $row->total_viruses;
        $data_spam[] = $row->total_spam;
        $data_size[] = $row->size;
    }

    $graph = new PieGraph(800, 385, 0, false);
    $graph->SetShadow();
    $graph->img->SetAntiAliasing();
    $graph->title->Set(__('top10mailrelays39'));
    //$graph->legend->SetLayout(LEGEND_HOR);
    $graph->legend->Pos(0.52, 0.87, 'center');

    $p1 = new PiePlot3d($data);
    $p1->SetTheme('sand');
    $p1->SetLegends($data_names);

    $p1->SetCenter(0.70, 0.4);
    $graph->legend->SetLayout(LEGEND_VERT);
    $graph->legend->Pos(0.25, 0.20, 'center');

    $graph->Add($p1);
    $graph->Stroke($filename);
}


// HTML code to display the graph
echo "<TABLE BORDER=\"0\" CELLPADDING=\"10\" CELLSPACING=\"0\" WIDTH=\"100%\">";
echo "<TR>";
echo " <TD ALIGN=\"CENTER\"><IMG SRC=\"" . IMAGES_DIR . MS_LOGO . "\" ALT=\"" . __('mslogo99') . "\"></TD>";
echo "</TR>";
echo "<TR>";

//  Check Permissions to see if the file has been written and that apache to read it.
if (is_readable($filename)) {
    echo " <TD ALIGN=\"CENTER\"><IMG SRC=\"" . $filename . "\" ALT=\"Graph\"></TD>";
} else {
    echo "<TD ALIGN=\"CENTER\"> " . __('message199') . " " . CACHE_DIR . " " . __('message299');
}

echo "</TR>";
echo "<TR>";
echo "<TD ALIGN=\"CENTER\">";
echo "<TABLE WIDTH=\"500\">";
echo "<TR BGCOLOR=\"#F7CE4A\">";
echo "    <TH>" . __('hostname39') . "</TH>";
echo "    <TH>" . __('ipaddresses39') . "</TH>";
echo "    <TH>" . __('country39') . "</TH>";
echo "    <TH>" . __('messages39') . "</TH>";
echo "    <TH>" . __('viruses39') . "</TH>";
echo "    <TH>" . __('spam39') . "</TH>";
echo "    <TH>" . __('volume39') . "</TH>";
echo "   </TR>";

for ($i = 0; $i < count($data_names); $i++) {
    echo "
   <TR BGCOLOR=\"#EBEBEB\">
    <TD>$data_names[$i]</TD>
    <TD>$data_ip[$i]</TD>
    <TD>$data_geoip[$i]</TD>
    <TD ALIGN=\"RIGHT\">" . number_format($data[$i]) . "</TD>\n
    <TD ALIGN=\"RIGHT\">" . number_format($data_virus[$i]) . "</TD>\n
    <TD ALIGN=\"RIGHT\">" . number_format($data_spam[$i]) . "</TD>\n
    <TD ALIGN=\"RIGHT\">" . format_mail_size($data_size[$i]) . "</TD></TR>\n";
}
echo "
  </TABLE>
 </TD>
</TR>
</TABLE>";

// Add footer
html_end();
// Close any open db connections
dbclose();
