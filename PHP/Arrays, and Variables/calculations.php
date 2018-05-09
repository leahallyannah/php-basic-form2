<?php
$num_one = 1;
$num_two = 2;
$num_three = 3;

// var_dump ($num_one)
// var_dump (1)
// var_dump ("1")
// var_dump ($num_one + $num_two - $num_three);

$distance_home = 1.2; // float
$distance_work = 2.5; // float

var_dump($distance_home + $distance_work + $num_three + .3); // float(7)

$a = 5; // int
$b = 10; // int

var_dump ($a * $b); // int(50)
var_dump ($a / $b);

// Result is float(0.5) instead of int(0) because php casts the data type automatical
// http://php.net/manual/en/language.types.type-juggling.php

$a = $a + 1;
var_dump($a); // int(6)
$a++; // int (7)
var_dump ($a);
$a--;
var_dump ($a);
var_dump ($a--);
var_dump ($a);
var_dump (--$a);
var_dump ($a);
$a = $a + 5;
var_dump ($a);
$a += 5;
var_dump ($a); 
