<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\Conflict; // menggunakan keyword use untuk namespace class
use function Helper\helpme; // menggunakan keyword use untuk namespace function
use const Helper\APPLICATION; // menggunakan keyword use untuk namespace constant

$conflict1 = new Conflict(); // membuat objek ketika sudah menggunakan use
$conflict2 = new Data\Two\Conflict(); // membuat objek ketika belum menggunakan kerword use

helpme();

echo APPLICATION . PHP_EOL;
