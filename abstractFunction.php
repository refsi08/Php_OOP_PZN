<?php

use Data\Cat;
use Data\Dog;

require_once "data/Animal.php";

$animal = new Cat();
$animal->name = "Audi";

echo $animal->run();


$animal = new Dog();
$animal->name = "Rizki";

echo $animal->run();