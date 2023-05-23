<?php

// memanggi; file class
require_once "data/Person.php";
require_once "functionOOP.php";

// membuat objek dengan keyword new
$person = new Person();
$person->name = null; 
$person->address = "Jambi";
// $person->country = "Indonesia";
var_dump($person);

echo "Nama : {$person->name}" . PHP_EOL;
echo "Address : {$person->address}" . PHP_EOL;
echo "Country : {$person->country}" . PHP_EOL;
