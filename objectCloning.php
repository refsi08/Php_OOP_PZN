<?php
require_once "data/Student.php";

// main object
$student1 = new Student();
$student1->id = "1";
$student1->name = "Eko";
$student1->value  = 100;
$student1->setSample("Sample Contoh");

var_dump($student1);

// duplicate object cloning object
$student2 = clone $student1;
var_dump($student2);

// manual duplicate cloning object
/**
 * $student2 = new Student();
 * $student2->id = $student1->id;
 * $student2->name = $student1->name;
 * $student2->value = $student1->value;
 */

 // Logika dari function __clone()
 /**
  *  $student1 => clone $student2 => $student2 -> __clone()
  */