<?php 
$buildings = array(
							'Building 1' => '50.937702,-1.396107',
							'Building 2' => '50.936377,-1.397512',
							'Nuffield Theatre' => '50.935911,-1.397083',
							'Turner Sims Concert Hall' => '50.935941,-1.398671',
							'Building 59 - Zepler' => '50.93728,-1.3977',
							'Building 58 - Mountbatten' => '50.937219,-1.398435',
							'Building 85 - Life Sciences' => '50.936644,-1.395425',
							'Building 18 - Jubliee Sports Centre' => '50.93399,-1.396761',
							'Building 42 - SUSU' => '50.934203,-1.397512',
							'Building 40 - The Stags Head' => '50.934758,-1.397394',
							'The Bridge Bar' => '50.933984,-1.397861',
							'The Cube' => '50.934288,-1.397738',
							'Union Films' => '50.934176,-1.397662'
	);
$names = array('festival', 'meet & greet', 'society meeting', 'party', 'language session');
	
$myFile = "events.kml";
$f = fopen($myFile, 'w') or die("can't open file");

fwrite($f, '<?xml version="1.0" encoding="UTF-8"?>');
fwrite($f, '<kml xmlns="http://earth.google.com/kml/2.1">');
fwrite($f, '<Document>');

$i = '2013-10-02';
while (strtotime($i) <= strtotime('2013-10-30')) {
		
	$i = date ("Y-m-d", strtotime("+5 day", strtotime($i)));
	
	fwrite($f, '<Placemark>');
	fwrite($f, '<Point>');

	$bldg = array_rand($buildings, 1);

	$coord = '<coordinates>' . $buildings["$bldg"] . '</coordinates>';
	fwrite($f, $coord);
	fwrite($f, '</Point>');
	
	$n = array_rand($names, 1);
	$name = '<name>' . $names["$n"] . '</name>';
	fwrite($f, $name);
	
	fwrite($f, '<TimeStamp>');
	$date = '<when>' . $i . '</when>';
	fwrite($f, $date);
	fwrite($f, '</TimeStamp>');
	
	fwrite($f, '<description>aaa</description>');

	fwrite($f, '</Placemark>');
}

fwrite($f, '</Document>');
fwrite($f, '</kml>');

fclose($f);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>