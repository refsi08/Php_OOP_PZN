<?php

require_once "data/Student.php";

// main object
$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value  = 100;
$student1->setSample("Hai sample");

var_dump($student1);
