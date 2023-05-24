<?php

require_once "data/Overriding.php";

$manager = new Manager();
$manager->name = "Refsi";
$manager->sayHello("Eko");

// memanggil fungsi sayHello() yang sama dari class parent
$spv = new VicePresident();
$spv->name = "Arif";
$spv->sayHello("Eko");
