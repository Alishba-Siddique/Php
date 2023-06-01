<?php

$mamabirthday = mktime(00, 00, 00, 10, 16, 2022);
$today = time();
echo $today;
$difference = $mamabirthday - $today;
$days = (int)($difference/86400);
print "Mama's Birthday is in $days days";
?>