<?php
// Alexander Kleer fuer QN.A Media
// 18. Mai 2010
// post@ak-broadcast.de

// Header
// header('Content-type: application/xml');

// URL zur Quelldatei
$daurl = 'http://service01.melonsol.net/kunden/38655487/w20_ti.inc';

// Datei oeffnen
$handle = fopen($daurl, "r");

// Wenn Inhalt vorhanden, auslesen...
if ($handle) {
    while (!feof($handle)) {
        $buffer = fgets($handle, 4096);
        echo $buffer;
    }
    fclose($handle);
}
?>