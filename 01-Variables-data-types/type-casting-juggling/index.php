<?php

$number1 = 5;
$number2= 10;
$number3= '20';
$bool1=true;
$bool2= false;
// Implicit Conversion

$result = $number1 + $number2;
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)

$result = $number1 + $bool1; // int (bool to int)
$result = $number2 + $bool1;  // int (bool to int)

// Explicit Conversion

$result = (string) $number1;
$result = (int) $number3;

var_dump($result);