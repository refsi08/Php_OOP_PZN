<?php

require_once "data/Shape.php";

use Data\{Shape, Rectangle};

$shape = new Shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getParentCorner() . PHP_EOL; // memanggil function yang return nya diambil dari function class parent
