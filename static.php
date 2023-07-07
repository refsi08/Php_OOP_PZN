<?php

require_once "helper/MatHelper.php";

use Helper\MathHelper as Help;
use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

// instansiasi properti
MathHelper::$name = "Grahakarya.com";

echo MathHelper::$name . PHP_EOL;

// instansiasi function
$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;
