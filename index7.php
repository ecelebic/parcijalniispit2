<?php

function addNumberToSum($number) {
static $sum = 0;
$sum += $number;
return $sum;

}

$vjezba2 = 'addNumberToSum';

echo $vjezba2(rand(1, 10)), "\n";
echo $vjezba2(rand(1, 10)), "\n";
echo $vjezba2(rand(1, 10)), "\n";
echo $vjezba2(rand(1, 10)), "\n";
echo $vjezba2(rand(1, 10)), "\n";

?>