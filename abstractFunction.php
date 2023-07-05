<?php

use Data\{Animal, Cat, Dog};

require_once "data/Animal.php";

$cat = new Cat();
$cat->name = "Audi";
$cat->run();


$dog = new Dog();
$dog->name = "Rizki";

$dog->run();
