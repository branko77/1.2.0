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

/* languages/de.php */
/* v0.2.9 */

return array(
    // 01-login.php
    'username' => 'Benutzername',
    'password' => 'Passwort',
    'mwloginpage01' => 'MailWatch Login Seite',
    'mwlogin01' => 'MailWatch Login',
    'badup01' => 'Ungültiger Benutzername oder Passwort',
    'emptypassword01' => 'Password darf nicht leer sein',
    'errorund01' => 'Ein unbekannter Fehler ist aufgetreten',
    'login01' => 'Login',

    // 03-funtions.php
    'jumpmessage03' => 'Zu Nachricht gehen:',
    'cuser03' => 'Benutzer',
    'cst03' => 'Systemzeit',
    'colorcodes03' => 'Farbkodierungen',
    'badcontentinfected03' => 'Schlechter Inhalt/Infiziert',
    'whitelisted03' => 'Auf Weisser Liste',
    'blacklisted03' => 'Auf Schwarzer Liste',
    'notverified03' => 'Nicht überprüft',
    'mailscanner03' => 'Mailscanner:',
    'none03' => 'None',
    'yes03' => 'JA',
    'no03' => 'NEIN',
    'status03' => 'Status',
    'message03' => 'Nachricht',
    'tries03' => 'Versuche',
    'last03' => 'Zuletzt',
    'loadaverage03' => 'Durchschn. Auslastung:',
    'mailqueue03' => 'Mail Queues',
    'inbound03' => 'Eingehend:',
    'outbound03' => 'Ausgehend:',
    'clean03' => 'Sauber:',
    'topvirus03' => 'Top Virus:',
    'freedspace03' => 'Freier Plattenplatz',
    'todaystotals03' => 'Heutige Zahlen',
    'processed03' => 'Verarbeitet:',
    'cleans03' => 'Sauber:',
    'viruses03' => 'Viren:',
    'blockedfiles03' => 'Blockierte Dateien:',
    'others03' => 'Andere:',
    'spam03' => 'Spam:',
    'spam103' => 'Spam',
    'hscospam03' => 'Hoch bewerteter Spam:',
    'hscomcp03' => 'Hoch bewerteter MCP:',
    'recentmessages03' => 'Aktuelle Nachrichten',
    'lists03' => 'Listen',
    'quarantine03' => 'Quarantäne',
    'datetime03' => 'Datum/Zeit',
    'from03' => 'Von',
    'to03' => 'An',
    'size03' => 'Größe',
    'subject03' => 'Betreff',
    'sascore03' => 'SA Bewertung',
    'mcpscore03' => 'MCP Bewertung',
    'found03' => 'gefunden',
    'highspam03' => 'High Spam',
    'mcp03' => 'MCP',
    'highmcp03' => 'High MCP',
    'reports03' => 'Berichte',
    'toolslinks03' => 'Werkzeuge/Verknüpfungen',
    'softwareversions03' => 'Softwareversionen',
    'documentation03' => 'Dokumentation',
    'logout03' => 'Abmelden',
    'pggen03' => 'Seite wurde erzeugt in',
    'seconds03' => 'Sekunden',
    'disppage03' => 'Seite zeigen',
    'of03' => 'von',
    'records03' => 'Einträge',
    'to0203' => 'bis',
    'score03' => 'Bewertung',
    'matrule03' => 'Zutreffende Regel',
    'description03' => 'Beschreibung',
    'footer03' => 'MailWatch für MailScanner v',
    'mailwatchtitle03' => 'MailWatch für Mailscanner',
    'php703' => 'MailWatch benötigt die (veraltete) MySQL extension zum Arbeiten: PHP7 hat diese extension entfernt und diese Software wird nicht funktionieren.',
    'radiospam203' => 'S',
    'radioham03' => 'H',
    'radioforget03' => 'F',
    'radiorelease03' => 'R',
    'clear03' => 'Clear</a> all',
    'spam203' => 'S</b> = Spam',
    'ham03' => 'H</b> = Ham',
    'forget03' => 'F</b> = Vergessen',
    'release03' => 'R</b> = Freigegeben',
    'learn03' => 'Lernen',
    'ops03' => 'Optionen',
    'or03' => 'oder',
    'mwfilterreport03' => 'MailWatch Filter Bericht:',
    'mwforms03' => 'MailWatch für Mailscanner - ',
    'dieerror03' => 'Error:',
    'dievirus03' => 'Sie benutzen Mailwatch im distributed mode. Daher kann MailWatch Ihre MailScanner-Konfiguration-Dateien nicht lesen, um den primären Virus-Scanner festzustellen - Bitte bearbeiten Sie functions.php und setzen Sie VIRUS_REGEX für Ihren primären Scanner.',
    'diescanner03' => 'Es konnte kein regulärer Ausdrück für Ihren primären Viren-Scanner ($scanner) ausgewählt werden - bitte beachten Sie die Beispiele in der functions.php um einen zu erstellen.',
    'diedbconn103' => 'Verbindung zu Datenbank fehlgeschlagen:',
    'diedbconn203' => 'Datenbank konnte nicht gewählt werden:',
    'diedbquery03' => 'Fehler beim Ausführen der Query:',
    'dieruleset03' => 'Datei mit Regelsätzen konnte nicht geöffnet werden',
    'dienomsconf03' => 'Konnte MailScanner Konfiguration-Datei nicht öffnen',
    'dienoconfigval103' => 'Konfigurations-Wert konnte nicht gefunden werden:',
    'dienoconfigval203' => 'in',
    'ldpaauth103' => 'Verbindung fehlgeschlagen zu',
    'ldpaauth203' => 'Suche ist fehlgeschlagen',
    'ldpaauth303' => 'Es konnten keine Einträge abgerufen werden',
    'ldapgetconfvar103' => 'Error: keine Verbindung möglich zum LDAP-Verzeichnis:',
    'ldapgetconfvar203' => 'Error: Anmeldung am LDAP-Verzeichnis fehlgeschlagen',
    'ldapgetconfvar303' => 'Error: kann Konfigurations-Wert nicht finden',
    'ldapgetconfvar403' => 'in LDAP-Verzeichnis.',
    'dietranslateetoi03' => 'Kann MailScanner ConfigDefs Datei nicht öffnen:',
    'diequarantine103' => 'Nachricht ID',
    'diequarantine203' => 'nicht gefunden.',
    'diequarantine303' => 'Konnte Quarantäneordner nicht öffnen:',
    'diereadruleset03' => 'Konnte MailScanner ruleset Datei nicht öffnen',
    'hostfailed03' => '(Hostname lookup fehlgeschlagen)',

    // 04-details.php
    'receivedon04' => 'Empfangen um:',
    'receivedby04' => 'Empfangen durch:',
    'receivedfrom04' => 'Empfangen von:',
    'receivedvia04' => 'Emfangen über:',
    'msgheaders04' => 'Nachrichten Metadaten:',
    'from04' => 'Von:',
    'to04' => 'An:',
    'size04' => 'Größe:',
    'subject04' => 'Betreff:',
    'hdrantivirus04' => 'Anti-Viren/Schutz vor gefährlichem Inhalt',
    'blkfile04' => 'Geblockte Datei:',
    'otherinfec04' => 'Andere Infektion:',
    'hscospam04' => 'Hoch bewerteter Spam:',
    'listedrbl04' => 'In RBL enthalten:',
    'spamwl04' => 'SPAM auf Weisser Liste:',
    'spambl04' => 'SPAM auf Schwarzer Liste:',
    'saautolearn04' => 'Spamassassin Automatisches Lernen:',
    'sascore04' => 'Spamassassin Bewertung:',
    'spamrep04' => 'Spam Bericht:',
    'hdrmcp04' => 'Schutz von Nachrichteninhalt (Message Content Protection MCP)',
    'highscomcp04' => 'Hoch bewerteter MCP:',
    'mcpwl04' => 'MCP auf Weisser Liste:',
    'mcpbl04' => 'MCP auf Schwarzer Liste:',
    'mcpscore04' => 'MCP Bewertung:',
    'mcprep04' => 'MCP Bericht:',
    'ipaddress04' => 'IP Adresse',
    'country04' => 'Land',
    'all04' => 'Alle',
    'addwl04' => 'Zur Weissen Liste hinzufügen',
    'addbl04' => 'Zur Schwarzen Liste hinzufügen',
    'release04' => 'Freigeben',
    'delete04' => 'Löschen',
    'salearn04' => 'SA Trainieren',
    'file04' => 'Datei',
    'type04' => 'Typ',
    'path04' => 'Pfad',
    'dang04' => 'Gefährlich',
    'altrecip04' => 'Alternative(r) Empfänger',
    'submit04' => 'Bestätigen',
    'actions04' => 'Aktion(en)',
    'quarcmdres04' => 'Ergebnisse des Quarantänebefehls',
    'resultmsg04' => 'Detailierte Ergebnisse',
    'id04' => 'ID:',
    'virus04' => 'Virus:',
    'spam04' => 'Spam:',
    'spamassassinspam04' => 'SpamAssassin Spam:',
    'quarantine04' => 'Quarantäne',
    'messdetail04' => 'Nachricht Detail',
    'dieid04' => 'Nachricht ID',
    'dienotfound04' => 'nicht gefunden!',
    'asham04' => 'Als Ham',
    'aspam04' => 'Als Spam',
    'forget04' => 'Vergesssen',
    'spamreport04' => 'Als Spam+Report',
    'spamrevoke04' => 'Als Ham+Revoke',
    'geoipfailed04' => '(GeoIP Lookup fehlgeschlagen)',
    'reversefailed04' => '(Reverse Lookup fehlgeschlagen)',
    'hostname04' => 'Hostname',
    
    // 05-status.php
    'recentmsg05' => 'Aktuelle Nachrichten',
    'last05' => 'Letzte',
    'messages05' => 'Nachrichten',
    'refevery05' => 'Aktualisiere alle',
    'seconds05' => 'Sekunden',

    // 06-viewmail.php
    'msgviewer06' => 'Nachrichtenbetrachter',
    'releasemsg06' => 'Diese Nachricht freigeben',
    'deletemsg06' => 'Diese Nachricht löschen',
    'actions06' => 'Aktionen:',
    'date06' => 'Datum:',
    'from06' => 'Von:',
    'to06' => 'An:',
    'subject06' => 'Betreff:',
    'nomessid06' => 'Keine Nachrichten-ID übertragen',
    'mess06' => 'Nachricht',
    'notfound06' => 'nicht gefunden',
    'error06' => 'Error:',
    'errornfd06' => 'Error: Datei nicht gefunden',
    'mymetype06' => 'MIME Type:',

    // 07-lists.php
    'addwlbl07' => 'Zu Weisser/Schwarzer Liste hinzufügen',
    'from07' => 'Von',
    'to07' => 'An',
    'list07' => 'Liste',
    'action07' => 'Aktion',
    'wl07' => 'Weisse Liste',
    'bl07' => 'Schwarze Liste',
    'reset07' => 'Zurücksetzen',
    'add07' => 'Hinzufügen',
    'delete07' => 'Löschen',
    'wblists07' => 'Whitelist/Blacklist',

    // 08-quarantine.php
    'folder08' => 'Ordner',
    'folder_0208' => 'Ordner',
    'items08' => 'Einträge',
    'qviewer08' => 'Quarantine Viewer',
    'dienodir08' => 'Kein Quarantäne-Verzeichnis gefunden',

    // 09-filter.inc.php
    'activefilters09' => 'Aktive Filter',
    'addfilter09' => 'Filter hinzufügen',
    'loadsavef09' => 'Filter öffnen/speichern',
    'tosetdate09' => 'Für das Datum muss das Format JJJJ-mm-tt verwendet werden',
    'oldrecord09' => 'Ältester Eintrag:',
    'newrecord09' => 'Neuester Eintrag:',
    'messagecount09' => 'Nachricthen Anzahl:',
    'stats09' => 'Statistiken (Gefiltert)',
    'add09' => 'Hinzufügen',
    'load09' => 'Laden',
    'save09' => 'Speichern',
    'delete09' => 'Löschen',
    'none09' => 'Keiner',
    'equal09' => 'ist gleich',
    'notequal09' => 'ist nicht gleich',
    'greater09' => 'ist größer als',
    'greaterequal09' => 'ist größer als oder gleich',
    'less09' => 'ist kleiner als',
    'lessequal09' => 'ist kleiner als oder gleich',
    'like09' => 'enthält',
    'notlike09' => 'enthält nicht',
    'regexp09' => 'entspricht dem regulären Ausdruck',
    'notregexp09' => 'entspricht nicht dem regulären Ausdruck',
    'isnull09' => 'ist null',
    'isnotnull09' => 'ist nicht null',
    'date09' => 'Datum',
    'headers09' => 'Headers',
    'id09' => 'Nachricht-ID',
    'size09' => 'Größe (Bytes)',
    'fromaddress09' => 'Von',
    'fromdomain09' => 'From Domäne',
    'toaddress09' => 'An',
    'todomain09' => 'An Domäne',
    'subject09' => 'Betreff',
    'clientip09' => 'Empfangen von (IP-Adresse)',
    'isspam09' => 'ist Spam (>0 = TRUE)',
    'ishighspam09' => 'ist High Scoring Spam (>0 = TRUE)',
    'issaspam09' => 'ist Spam according to SpamAssassin (>0 = TRUE)',
    'isrblspam09' => 'ist in einer oder mehrere RBL\'s eingetragen (>0 = TRUE)',
    'spamwhitelisted09' => 'ist Whitelisted (>0 = TRUE)',
    'spamblacklisted09' => 'ist Blacklisted (>0 = TRUE)',
    'sascore09' => 'SpamAssassin Bewertung',
    'spamreport09' => 'Spam Bericht',
    'ismcp09' => 'ist MCP (>0 = TRUE)',
    'ishighmcp09' => 'its High Scoring MCP (>0 = TRUE)',
    'issamcp09' => 'ist MCP laut SpamAssassin (>0 = TRUE)',
    'mcpwhitelisted09' => 'ist MCP Whitelisted (>0 = TRUE)',
    'mcpblacklisted09' => 'ist MCP Blacklisted (>0 = TRUE)',
    'mcpscore09' => 'MCP Bewertung',
    'mcpreport09' => 'MCP Bericht',
    'virusinfected09' => 'enthält Virus (>0 = TRUE)',
    'nameinfected09' => 'enthält einen verbotenen Anhang (>0 = TRUE)',
    'otherinfected09' => 'enthält andere Infektionen (>0 = TRUE)',
    'report09' => 'Virus Bericht',
    'hostname09' => 'MailScanner Hostname',
    'remove09' => 'Löschen',
    'reports09' => 'Bericht',
    
    // 10-other.php
    'tools10' => 'Werkzeuge',
    'toolslinks10' => 'Tools and Links',
    'usermgnt10' => 'Benutzerverwaltung',
    'avsophosstatus10' => 'Sophos Status',
    'avfsecurestatus10' => 'F-Secure Status',
    'avclamavstatus10' => 'ClamAV Status',
    'avmcafeestatus10' => 'McAfee Status',
    'avfprotstatus10' => 'F-Prot Status',
    'mysqldatabasestatus10' => 'MySQL-Datenbank Status',
    'viewconfms10' => 'MailScanner Einstellungen betrachten',
    'editmsrules10' => 'MailScanner Regeln bearbeiten',
    'spamassassinbayesdatabaseinfo10' => 'SpamAssassin Bayes-Datenbank Info',
    'updatesadesc10' => 'Aktualisiere die Beschreibungen der SpamAssassin Regeln',
    'updatemcpdesc10' => 'Aktualisiere die Beschreibungen der MCP Regeln',
    'updategeoip10' => 'Aktualisiere die GeoIP Datenbank',
    'links10' => 'Links',

    // 11-sf_versions.php
    'softver11' => 'Softwareversionen',
    'nodbdown11' => 'Keine Datenbank heruntergeladen',
    'version11' => 'Version',

    // 12-user_manager.php
    'usermgnt12' => 'Benutzerverwaltung',
    'username12' => 'Benutzername',
    'fullname12' => 'Voller Name',
    'type12' => 'Typ',
    'spamcheck12' => 'Spam Prüfung',
    'spamscore12' => 'Spam Bewertung',
    'spamhscore12' => 'Hohe Spam Bewertung',
    'action12' => 'Aktionen',
    'edit12' => 'Bearbeiten',
    'delete12' => 'Löschen',
    'filters12' => 'Filter',
    'newuser12' => 'Neuer Benutzer',
    'forallusers12' => 'Für alle Benutzer ausser dem Administrator muss der Benutzername eine E-Mail Adresse sein',
    'username0212' => 'Benutzername:',
    'name12' => 'Name:',
    'password12' => 'Passwort:',
    'usertype12' => 'Benutzertyp:',
    'user12' => 'Benutzer',
    'domainadmin12' => 'Domänen Administrator',
    'admin12' => 'Administrator',
    'quarrep12' => 'Quarantäne Bericht:',
    'senddaily12' => 'Täglichen Bericht senden?:',
    'quarreprec12' => 'Empfänger des Quarantäne Berichts:',
    'overrec12' => 'Empfangadresse für Quarantäne Bericht überschreiben?<BR>(falls leer, wird der Benutzername verwendet)',
    'scanforspam12' => 'Auf Spam prüfen:',
    'scaneforspam12' => 'E-Mail auf Spam prüfen?',
    'pontspam12' => 'Spam Bewertung:',
    'hpontspam12' => 'Hohe Spam Bewertung:',
    'usedefault12' => 'Voreinstellungen benutzen',
    'action_0212' => 'Aktion:',
    'reset12' => 'Zurücksetzen',
    'areusuredel12' => 'Soll der Benutzer tatsächlich gelöscht werden',
    'errorpass12' => 'Passwörter stimmen nicht überein',
    'edituser12' => 'Benutzer bearbeiten',
    'create12' => 'Erstellen',
    'userregex12' => 'Benutzer (Regexp)',
    'update12' => 'Aktualisieren',
    'userfilter12' => 'Benutzer-Filter für',
    'filter12' => 'Filter',
    'add12' => 'Hinzufügen',
    'active12' => 'Aktivieren',
    'yes12' => 'Ja',
    'no12' => 'Nein',
    'questionmark12' => '?',
    'toggle12' => 'Aktivieren/Deaktivieren',
    'sure12' => 'Sind Sie sicher?',
    'unknowtype12' => 'Unbekannter Typ',
    'yesshort12' => 'J',
    'noshort12' => 'N',

    // 13-sa_rules_update.php
    'input13' => 'Jetzt ausführen',
    'updatesadesc13' => 'SpamAssassin Regel-Beschreibungen aktualieren',
    'updategeoip15' => 'GeoIP Datenbank aktualisieren',
    'message113' => 'Dieses Programm wird benutzt, um die aktuellen SpamAssassin Regeln, die auf der Nachrichten-Detail-Seite angezeigt werden, in der SQL-Datenbank zu aktualieren.',
    'message213' => 'Dieses Programm sollte generell nach einem SpamAssassin-Update ausgeführt werden. Es kann aber auch zu jeder anderen Zeit gestartet werden, da es lediglich aktualisierte Regeln ersetzt und neue Regeln hinzufügt. Dadurch werden Beschreibungen von veralteten oder entfernten Regeln erhalten.',
    'saruldesupdate13' => 'Aktualisierung der SpamAssassin Regel-Beschreibungen',
    'rule13' => 'Regel',
    'description13' => 'Beschreibung',
    
    // 14-reports.php
    'messlisting14' => 'Nachrichten-Übersicht',
    'messop14' => 'Nachrichten-Aktionen',
    'messdate14' => 'Gesamtanzahl Nachrichten nach Tag',
    'topmailrelay14' => 'Top Mail Relays',
    'topvirus14' => 'Top Viren',
    'virusrepor14' => 'Viren-Bericht',
    'topsendersqt14' => 'Top Sender nach Anzahl',
    'topsendersvol14' => 'Top Sender nach Volumen',
    'toprecipqt14' => 'Top Empfänger nach Anzahl',
    'toprecipvol14' => 'Top Empfänger nach Volumen',
    'topsendersdomqt14' => 'Top Sender-Domänen nach Anzahl',
    'topsendersdomvol14' => 'Top SenderDomänen nach Volumen',
    'toprecipdomqt14' => 'Top Empfänger-Domänen nach Anzahl',
    'toprecipdomvol14' => 'Top Empfänger-Domänen nach Volumen',
    'assassinscoredist14' => 'SpamAssassin Score Distribution',
    'assassinrulhit14' => 'SpamAssassin Rule Hits',
    'auditlog14' => 'Audit Log',
    'mrtgreport14' => 'MRTG Style Report',
    'mcpscoredist14' => 'MCP Score Distribution',
    'mcprulehit14' => 'MCP Rule Hit',
    'reports14' => 'Berichte',

    // 15-geoip_update.php
    'input15' => 'Jetzt ausführen',
    'updategeoip15' => 'GeoIP Database aktualisieren',
    'message115' => 'Dieses Programm wird die GeoIP Datenbankdateien (werden an jedem ersten Dienstag eines Monats aktualisert) von ',
    'message215' => 'herunterladen, wodurch das Ursprungsland für jede IP-Adresse herausgefunden und auf der Detailseite der Nachrichten angezeigt.',
    'downfile15' => 'Laden Dateien herunter, bitte warten...',
    'geoipv415' => 'GeoIP IPv4 Datendatei',
    'geoipv615' => 'GeoIP IPv6 Datendatei',
    'downok15' => 'erfolgreich heruntergeladen',
    'downbad15' => 'Beim Herunterladen ist ein Fehler aufgetreten',
    'downokunpack15' => 'Herunterladen abgeschlossen, Dateien werden entpackt...',
    'message315' => 'Es konnte keine GeoIP Datendatei heruntergeladen werden (weder CURL nocht fsockopen).',
    'message415' => 'Installieren Sie entweder die cURL-Erweiterung (bevorzugt) oder aktivieren Sie fsockopen in Ihrer php.ini',
    'unpackok15' => 'erfolgreich entpackt',
    'extractnotok15' => 'Konnte Dateien nicht extrahieren',
    'extractok15' => 'Extrahieren erfolgreich',
    'message515' => 'GeoIP Datendatei konnte nicht extrahiert werden.',
    'message615' => 'Aktivieren Sie Zlib in Ihrer PHP-Installation oder installieren Sie gunzip.',
    'processok' => 'Vorgang abgeschlossen!',
    'norread15' => 'Lesen oder Schreiben fehlgeschlagen für',
    'message715' => 'Aus unbekanntem Grund existieren die Dateien noch.',
    'message815' => 'Löschen Sie die Dateien manuell aus',
    'directory15' => 'Verzeichnis',
    'geoipupdate15' => 'GeoIP Datenbank-Aktualisierung',
    'dieproxy15' => 'Proxy-Typ sollte entweder "HTTP" oder "SOCKS5" sein, überprüfen Sie die Konfigurations-Datei',

    // 16-rep_message_listing.php
    'messlisting16' => 'Nachrichtenliste',

    // 17-rep_message_ops.php
    'messageops17' => 'Nachrichten-Aktionen',
    'messagelisting17' => 'Nachrichtenliste',

    // 18-bayes_info.php
    'spamassassinbayesdatabaseinfo18' => 'SpamAssassin Bayes-Datenbank Info',
    'bayesdatabaseinfo18' => 'Bayes-Datenbank Informationen',
    'nbrspammessage18' => 'Anzahl Spam-Nachrichten:',
    'nbrhammessage18' => 'Anzahl Ham-Nachrichten:',
    'nbrtoken18' => 'Anzahl Token:',
    'oldesttoken18' => 'Ältester Token:',
    'newesttoken18' => 'Neuester Token:',
    'lastjournalsync18' => 'Letzte Protokoll-Synchronisierung:',
    'lastexpiry18' => 'Letzter Verfall:',
    'lastexpirycount18' => 'Lezter Verfalls-Reduktions-Zähler:',//what is this?
    'tokens18' => 'Token',
    
    // 19-clamav_status.php
    'avclamavstatus19' => 'ClamAV Status',

    // 20-docs.php
    'doc20' => 'Dokumentation',
    'message20' => 'Diese Seite erfordert eine authentifizierung, sodass Sie hier Links zu Ihrer Dokumentations-Seite einstellen können und Ihren Nutzern Zugriff auf diese gewähren.',
    
    // 21-do_message_ops.php
    'opresult21' => 'Ergebnisse der Aktion',

    // 22-f-prot_status.php
    'fprotstatus22' => 'F-Prot Status',

    // 23-f-secure_status.php
    'fsecurestatus23' => 'F-Secure Status',

    // 24-mailq.php
    'mqviewer24' => 'Mail-Queue-Anzeige',
    'diemq24' => 'Keine Queue angegeben',

    // 25-mcafee_status.php
    'mcafeestatus25' => 'McAfee Status',

    // 26-mcp_rules_update.php
    'mcpruledesc26' => 'MCP Aktualisierung der Regelbeschreibung',

    // 27-msconfig.php
    'config27' => 'Konfiguration',
    'msconfig27' => 'MailScanner Konfiguration',
    
    // 28-ms_lint.php
    'mailscannerlint28' => 'MailScanner Lint',
    'diepipe28' => 'Kann pipe nicht öffnen',

    // 29-msre_index.php
    'rulesetedit29' => 'Regelsatz Editor',

    // 30-msrule.php
    'rules30' => 'Regeln',

    // 31-mysql_status.php
    'mysqlstatus31' => 'MySQL Status',

    // 32-postfixmailq.php
    'mqviewer32' => 'Mailqueue-Anzeige',
    'mqcombined32' => 'Kombinierte mail queue (Ein- und Ausgehend)',

    // 33-rep_audit_log.php
    'auditlog33' => 'Kontrollbericht',
    'datetime33' => 'Datum/Zeit',
    'user33' => 'Benutzer',
    'ipaddress33' => 'IP-Adresse',
    'action33' => 'Aktion',
    
    // 34-rep_mcp_rule_hits.php
    'mcprulehits34' => 'MCP Rule Hits',
    'rule34' => 'Regel',
    'des34' => 'Beschreibung',
    'total34' => 'Gesamt',
    'clean34' => 'Clean',
    'mcp34' => 'MCP',
    
    // 35-rep_mcp_score_dist.php
    'mcpscoredist35' => 'MCP Bewertungs-Verteilung',
    'die35' => 'Error: 2 oder mehr Einträge müssen aus der Datenbank empfangen werden',
    'scorerounded35' => 'Bewertung (gerundet)',
    'nbmessages35' => 'Anz. Nachrichten',
    'score35' => 'Bewertung',
    'count35' => 'Anzahl',
    
    // 36-rep_mrtg_style.php
    'mrtgstyle36' => 'MRTG Style Mail Report',
    'die36' => 'Error: 2 oder mehr Einträge müssen aus der Datenbank empfangen werden',

    // 37-rep_sa_rule_hits.php
    'sarulehits37' => 'SpamAssassin Rule Hits',
    'rule37' => 'Regel',
    'desc37' => 'Beschreibung',
    'score37' => 'Bewertung',
    'total37' => 'Gesamt',
    'ham37' => 'Ham',
    'spam37' => 'Spam',
    
    // 38-rep_sa_score_dist.php
    'sascoredist38' => 'SpamAssassin Bewertungs-Verteilung',
    'scorerounded38' => 'Bewertung (gerundet)',
    'nbmessage38' => 'Anz. Nachrichten',
    'score38' => 'Bewertung',
    'count38' => 'Anzahl',
    'die38' => 'Error: 2 oder mehr Einträge müssen aus der Datenbank empfangen werden',

    // 39-rep_top_mail_relays.php
    'topmailrelays39' => 'Top Mail Relays',
    'top10mailrelays39' => 'Top 10 Mail Relays',
    'hostname39' => 'Hostname',
    'ipaddresses39' => 'IP-Adresse',
    'country39' => 'Land',
    'messages39' => 'Nachricht',
    'viruses39' => 'Viren',
    'spam39' => 'Spam',
    'volume39' => 'Volumen',
    'geoipfailed39' => '(GeoIP lookup fehlgeschlagen)',
    'hostfailed39' => '(Hostname lookup fehlgeschlagen)',
    
    // 40-rep_top_recipient_domains_by_quantity.php
    'toprecipdomqt40' => 'Top Empfänger Domänen by Quantity',
    'top10recipdomqt40' => 'Top 10 Empfänger Domänen by Volume',
    'domain40' => 'Domäne',
    'count40' => 'Anzahl',
    'size40' => 'Größe',
    
    // 41-rep_top_recipient_domains_by_volume.php
    'toprecipdomvol41' => 'Top Empfänger Domänen nach Volume',
   'top10recipdomvol41' => 'Top 10 Empfänger Domänen nach Volume',
    'domain41' => 'Domäne',
    'count41' => 'Anzahl',
    'size41' => 'Größe',
    
    // 42-rep_top_recipients_by_quantity.php
    'toprecipqt42' => 'Top Empfänger nach Anzahl',
    'top10recipqt42' => 'Top 10 Empfänger nach Anzahl',
    'email42' => 'E-Mail-Adresse',
    'count42' => 'Anzahl',
    'size42' => 'Größe',
    
    // 43-rep_top_recipients_by_volume.php
    'toprecipvol43' => 'Top Empfänger nach Volumen',
    'top10recipvol43' => 'Top 10 Empfänger nach Volumen',
    'email43' => 'E-Mail-Adresse',
    'count43' => 'Anzahl',
    'size43' => 'Größe',
    
    // 44-rep_top_sender_domains_by_quantity.php
    'topsenderdomqt44' => 'Top Sender Domains nach Anzahl',
    'top10senderdomqt44' => 'Top 10 Sender Domains nach Anzahl',
    'domain44' => 'Domäne',
    'count44' => 'Anzahl',
    'size44' => 'Größe',
    
    // 45-rep_top_sender_domains_by_volume.php
    'topsenderdomvol45' => 'Top Sender Domänen nach Volumen',
    'top10senderdomvol45' => 'Top 10 Sender Domänen nach Volumen',
    'domain45' => 'Domäne',
    'count45' => 'Anzahl',
    'size45' => 'Größe',

    // 46-rep_top_senders_by_quantity.php
    'topsendersqt46' => 'Top Sender nach Anzahl',
    'top10sendersqt46' => 'Top 10 Sender nach Anzahl',
    'email46' => 'E-Mail-Adresse',
    'count46' => 'Anzahl',
    'size46' => 'Größe',
    
    // 47-rep_top_senders_by_volume.php
    'topsendersvol47' => 'Top Sender nach Volumen',
    'top10sendersvol47' => 'Top 10 Sender nach Volumen',
    'email47' => 'E-Mail-Adresse',
    'count47' => 'Anzahl',
    'size47' => 'Größe',
    
    // 48-rep_top_viruses.php
    'topvirus48' => 'Top Viren',
    'top10virus48' => 'Top 10 Viren',
    'nodata48' => 'Zu wenig Daten zum Generieren des Graphen.',
    'virus48' => 'Virus',
    'count48' => 'Anzahl',
    'dienorow48' => 'Error: keine Einträge von der Datenbank erhalten...',

    // 49-rep_total_mail_by_date.php
    'totalmaildate49' => 'Anzahl Mails pro Tag',
    'totalmailprocdate49' => 'Anz. verarbeiteter Mails pro Tag',
    'volume49' => 'Volumen',
    'nomessages49' => 'Anz. Nachrichten',
    'date49' => 'Datum',
    'barmail49' => 'Mails',
    'barvirus49' => 'Viren',
    'barspam49' => 'Spam',
    'barmcp49' => 'MCP',
    'barvolume49' => 'Volumen',
    'total49' => 'Gesamt<br>Mail',
    'clean49' => 'Clean',
    'lowespam49' => 'Low Spam',
    'highspam49' => 'High Spam',
    'blocked49' => 'Blockiert',
    'virus49' => 'Virus',
    'mcp49' => 'MCP',
    'unknoweusers49' => 'Unbekannter<br>Benutzer',
    'resolve49' => 'Kann nicht<br>auflösen',
    'rbl49' => 'RBL',
    'totals49' => 'Gesamt',
    
    // 50-rep_viruses.php
    'virusreport50' => 'Viren-Bericht',
    'virus50' => 'Virus',
    'scanner50' => 'Scanner',
    'firstseen50' => 'Erste Erkennung',
    'count50' => 'Anzahl',
    
    // 51-sa_lint.php
    'salint51' => 'SpamAssassin Lint',
    'diepipe51' => 'Kann pipe nicht öffnen',

    // 52-sf_version.php
    'mwandmsversion52' => 'MailWatch und MailScanner Versions Informationen',

    // 53-sophos_status.php
    'sophos53' => 'Sophos',

    // 54-mailscanner_relay.php
    'diepipe54' => 'Kann pipe nicht öffnen',

    // 55-msre_edit.php
    'diefnf55' => 'Datei nicht gefunden:',

    // 56-postfix_relay.php
    'diepipe56' => 'Kann pipe nicht öffnen',

    // 57-quarantine_action.php
    'dienoid57' => 'Error: Keine Nachrichten-ID',
    'dienoaction57' => 'Error: Keine Aktion',
    'diemnf57' => 'Error: Nachricht in Quarantäne nicht gefunden',
    'dieuaction57' => 'Unbekannte Aktion:',

    // 58-viewpart.php
    'nomessid58' => 'Keine Nachrichten-ID übertragen',
    'mess58' => 'Nachricht',
    'notfound58' => 'nicht gefunden',
    'error58' => 'Error:',
    'errornfd58' => 'Error: Datei nicht gefunden',
    'part58' => 'Abschnitt',

    // 59-auto-release.php
    'msgnotfound159' => 'Nachricht nicht gefunden. Möglicherweise haben Sie die Nachricht bereits freigegeben oder der Link ist abgelaufen.',
    'msgnotfound259' => 'Bitte kontaktieren Sie Ihren Mail-Administrator und teilen Sie ihm diese Nachrichten-ID mit: ',
    'msgnotfound393' => 'wenn diese Nachricht freigegeben werden soll.',
    'msgreleased59' => 'Nachricht freigegeben<br>Möglicherweise dauert es wenige Minuten, bis diese in Ihrem Posteingang eintrifft.',
    'tokenmismatch59' => 'Fehler beim freigeben der Nachricht - Token stimmen nicht überein',
    'notallowed59' => 'Sie haben keine Berechtigung zum Zugriff auf diese Seite!',
    'dberror59' => 'Etwas ist schief gegangen - Kontaktieren Sie den Administrator',
    'arview059' => 'Anzeigen',
    'arrelease59' => 'Freigeben',

     // 60-rpcserver.php
    'paratype160' => 'Parameter-Typ',
    'paratype260' => 'entspricht nicht dem erwarteten Typ.',
    'paratype160' => 'entspricht nicht dem erwarteten Typ.',
    'notfile60' => 'ist keine Datei.',
    'permdenied60' => 'Zugriff verweigert.',
    'client160' => 'Client',
    'client260' => 'ist nicht authorisiert sich zu verbinden.',

    // 99 - General
    // Space rule for colon. Change it according to your langage typographical rule.
    'colon99' => ' :',
    'diemysql99' => 'Fehler: keine Daten von der Datenbank erhalten',
    'message199' => 'Datei ist nicht lesbar. Bitte stellen Sie sicher, dass',
    'message299' => 'von MailWatch gelesen und beschrieben werden kann',
    'mwlogo99' => 'MailWatch Logo',
    'mslogo99' => 'MailScanner Logo',
    'i18_missing' => 'Keine deutsche Übersetzung vorhanden',
    'cannot_read_conf' => "Kann conf.php nicht lesen - bitte die Datei conf.php.example kopieren und die Parameter entsprechend anpassen.",

);
