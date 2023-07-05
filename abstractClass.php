<?php
// Abstract Class -> class tersebut tidak bisa digunakan object secara langsung

use Data\{Location, City, Province, Country};

require_once "data/Location.php";

// tidak bisa membuat class parent menjadi objek secara langsung harus menggunakan child class sebagai objek
$location = new City();
$location->name = 'Setia Budi';
echo "I live in $location->name" . PHP_EOL;

$locationProvince = new Province();
$locationProvince->name = "Jakarta";
echo "From $locationProvince->name" . PHP_EOL;

$locationCountry = new Country();
$locationCountry->name = "Indonesia";
echo "Stay in $locationCountry->name" . PHP_EOL;
