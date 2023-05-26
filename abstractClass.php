<?php
// Abstract Class -> class tersebut tidak bisa digunakan object secara langsung

use Data\City;
use Data\Country;
use Data\Province;

require_once "data/Location.php";

// tidak bisa membuat class parent menjadi objek secara langsung harus menggunakan child class sebagai objek
$location = new City();
$location->name = 'Hello Refsi';
var_dump($location);

$location = new Province();
$location = new Country();
