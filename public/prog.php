<?php

// get timestamps
$start = strtotime($_GET['start']);
$end = strtotime($_GET['end']);
$cb = $_GET['callback'];

$category = array("Cultural", "Sports", "Rest");

$society = array(
		array("Greek", "Asian", "Chinese", "Libyan"),
		array("Swimming", "Horse-riding", "Fencing", "Squash"),
		array("Krishna", "Latino-dancing", "Ballroom-dancing", "Shakespearean")
		);
		
$type = array("Meeting", "Get-together", "Social");

$point = array(
	array("The Bridge Bar", 50.933984, -1.397861),
	array("The Cube", 50.934288, -1.397738),
	array("Building 42", 50.934203, -1.397512),
	array("Turner Sims", 50.935941, -1.398671),
	array("Jubilee Sports Hall", 50.93399, -1.396761)
	);
	
// start data
echo "$cb([";
 
// random data simulation data
for ($x=0; $x<100; $x++) {
  
  if ($x) echo ',';
  
  $index = mt_rand(0,2);
  $soc = mt_rand(0,3);
  $bldg = mt_rand(0,4);
  $t = mt_rand(0,2);
  
  $time = rand ($start, $end);
  $interval = mt_rand(1, 3)*60*60 ;
  
	 echo '{';
	 echo 'start:"' . date('Y-m-d\TH:i:sO', $time) . '",'; 
	 echo 'end:"' . date('Y-m-d\TH:i:sO', $time+$interval) . '",'; 
	 echo 'point:{lat:'. $point[$bldg][1].',lon:'.$point[$bldg][2].'},';
	 echo 'title:" '.$society[$index][$soc].' Society '. $type[$t] . '",';
	 echo 'options:{infoHtml:"'. $society[$index][$soc] . ' Society have a ' . $type[$t] . ' <br />&nbsp;at <b>' . $point[$bldg][0]. '</b><br />&nbsp; on <b>' .date('l, d-M-y', $time). '</b><br />&nbsp; from <b>'. date('H:i A', $time) .'</b><br />&nbsp; till <b>'. date('H:i A', $time+$interval).'</b>",';
	 echo 'tags: ["'. $category[$index] . '","' . $society[$index][$soc] . '","'. $point[$bldg][0] . '","' . date('l', $time) . '","' . date('Y-m-d', $time).'"],';
	 if($index == 0) echo 'theme:"blue"}';
	 else if($index == 1) echo 'theme:"green"}';
	 else echo 'theme:"red"}';
	 
	 echo '}';
 
}
 
// end data
echo "])";
 
?>