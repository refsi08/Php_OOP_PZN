<?php

/**
 * stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe
 * object
 */
$array = [
    "firstName" => "Eko",
    "middleName" => "Kurniawan",
    "lastName" => "Khanndey",
];

// konversi dari array ke object
$object = (object) $array;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Middle Name $object->middleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;

//konversi dari object ke array
$arrayLagi = (array) $object;
var_dump($arrayLagi);

// example file Person.php
require_once "data/Person.php";

$person = new Person("Eko", "Subang");
var_dump($person);

// Konversi dari class ke array
$arrayPerson = (array) $person;
var_dump($arrayPerson);
