<?
// get timestamps
$start = strtotime($_GET['start']);
$end = strtotime($_GET['end']);
$cb = $_GET['callback'];
 
// start data
echo "$cb([";
 
// make some fake data
for ($x=0; $x<20; $x++) {
  if ($x) echo ',';
  echo '{';
  echo 'title:"Item '.$x.'",';
  echo 'start:"'.date('Y-m-d\TH:i:sO', rand($start, $end)).'",';
  echo 'point:{lat:'.(50.9 + 10*(float)rand()/(float)getrandmax())
       .',lon:'.(-1.3 + 10*(float)rand()/(float)getrandmax()).'}';
  echo '}';
}
 
// end data
echo "])";
 
?>