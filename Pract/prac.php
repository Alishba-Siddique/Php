<?php
$x=49;
$sum=0; $rem=0;
for($i=0;$i<=strlen($x);$i++)
{
  $rem = $x % 10;
  $sum = $sum + $rem; 
  $x = $x/10;
}
echo "sum of digits = $sum . <br>";

$num=5;
if($num % 2 == 0){
  echo "even";
}
else{
  echo "odd";
}
echo "<br>";
if($num % 10 == 0){
  echo "$num is prime";
}
else{
  echo "$num is not prime";
}
echo "<br>";
for($i=1;$i<=10;$i++)
{
  $mul = 5*$i;
  echo "<br>5 * $i = $mul<br>";
}
echo "<br>";
function add($a,$b){
  for($i=0;$i<$b;$i++)
  {
    $a++;
  }
  return $a;
}
echo "90 + 32 = " . add(90,32);
echo "<br>";

function sum($c,$d){
  while($d != 0)
  {
    $carry = $c & $d;
    $c = $c ^ $d;
    $d = $carry << 1;
  }
  return $c;
}
echo "10 + 0 = " . sum(10,0);
echo "<br>";
?>


function(marks){
  
If marks are 60% or more, grade will be First Division.
If marks between 45% to 59%, grade will be Second Division.
If marks between 33% to 44%, grade will be Third Division.
If marks are less than 33%, student will be Fail.
}