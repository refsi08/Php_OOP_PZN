<?php

require_once "data/Overriding.php";

$manager = new Manager();
$manager->name = "Refsi";
$manager->sayHello("Eko");

$spv = new VicePresident();
$spv->name = "Maulana";
$spv->sayHello("Siregar");