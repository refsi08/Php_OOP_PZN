<?php

require_once "data/Student.php";

// main object
$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value  = 100;
$student1->setSample("Sample Contoh");

$string = (string) $student1;
echo $string . PHP_EOL;

// can you fix it
echo $student1 . PHP_EOL;
