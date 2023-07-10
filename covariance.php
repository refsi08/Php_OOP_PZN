<?php 
require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\Animal;
use Data\AnimalFood;
use Data\CatShelter;
use Data\DogShelter;
use Data\Food;

$catShelter = new CatShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new AnimalFood());

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new Food());

?>