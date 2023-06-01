<?php

$a=array("Italy" => "Rome",
          "Luxembourg" => "Luxembourg",
          "Denmark"  => "Copenhangen",
          "Finland"  => "Helsinki",
          "France"  => "Paris",
          "Germany"  => "Berlin",
          "Greece" => "Athens",
          "United Kingdom" => "London",
          "Cyprus"  => "Nicosia",
          "Austria" => "Vienna",
          "Pakistan" => "Islamabad");

  print_r(asort($a));
  
  print_r(rsort($a));
  

echo phpversion();

echo "<h3>Program 2</h3>";


function stringReverse($str) {
  echo strrev($str);
}

stringReverse("Hello");

echo "<br />";

echo date("jS \o\\f F Y");

echo "<h3>Program 3</h3>";

for($i=0;$i<=5;$i++){ 
  for($j=1;$j<=$i;$j++)
  {  
  echo "* ";  
  }  
  echo "<br>";  
} 

echo "<h3>Program 4</h3>";


echo round(1.65,1). "<br />";
echo ceil(1.65) . "<br />";
echo floor(-1.54) . "<br />";
?>



