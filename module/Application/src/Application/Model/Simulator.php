<?php 

$myFile = "events.kml";
$f = fopen($myFile, 'w') or die("can't open file");

fwrite($f, '<?xml version="1.0" encoding="UTF-8"?>');
fwrite($f, '<kml xmlns="http://earth.google.com/kml/2.1">');
fwrite($f, '<Document>');
fwrite($f, '</Document>');
fwrite($f, '</kml>');

fclose($f);
?>