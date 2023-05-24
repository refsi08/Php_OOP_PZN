<?php

require_once "Data/Conflict.php";
require_once "Data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy, Sample}; // menggunakan keyword as dan Grub untuk mengganti nama class
use Data\Two\Conflict as Conflict2; // menggunakan keyword as untuk mengganti nama class
use function Helper\helpme as help; // menggunakan keyword as untuk mengganti nama function
use const Helper\APPLICATION as APP; // menggunakan keyword as untuk mengganti nama constant


$conflict1 = new Conflict1();
$conflict2 = new Conflict2();
$dummy = new Dummy();
$sample = new Sample();

help();
echo APP . PHP_EOL;
