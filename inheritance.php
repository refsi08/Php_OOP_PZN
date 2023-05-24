<?php

require_once "data/Manager.php";
// mengakses class parent manager dan child class supervisor

$manager = new Manager();
$manager->name = 'Refsi Manager';
$manager->sayHello('Pak');

$supervisor = new Supervisor();
$supervisor->name = 'Eko Supervisor';
$supervisor->sayHello('Ibu');
