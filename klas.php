<?php
echo "hoeveel namen wil je toevoegen ";
$arrayName = array();
$getal = readline ();
for ($i=0; $i < $getal; $i++) {

array_push($arrayName, readline()) ;
}
foreach($arrayName as $zin)
{
  echo "dit is je naam ${zin}" . PHP_EOL;
}
var_dump( explode( ',', $zin ) );


//$arrayname = explode(" ", $zin);

?>
