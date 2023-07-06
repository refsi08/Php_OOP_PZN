<?php 

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello, HasName};

$person = new Person();
$person->goodBye("Eko");
$person->hello("Audi");

$person->name = "siapa ya";
var_dump($person->name);

?>