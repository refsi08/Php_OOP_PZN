<?php

namespace { // global namespace

    require_once "Data/Conflict.php";
    require_once "Data/Helper.php";

    // membuat object dari namespace
    $conflict1 = new \Data\One\Conflict();
    $conflict1 = new \Data\Two\Conflict();

    // mengakses namespace constant
    echo Helper\APPLICATION . PHP_EOL;
    // mengakses namespace function
    Helper\helpme();
}
