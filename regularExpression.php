<?php

// searching match pattern
$matches = [];
$result = (bool)preg_match_all("/eko|awan|edy/i", "Eko Kurniawan Khannedy", $matches);

var_dump($result);
var_dump($matches);

// replace expression
$result = preg_replace("/anjing|bangsat/i", "***", "Dasar lu ANJING dan BANGSAT!");
var_dump($result);

// split expresstion
$result = preg_split("/[\s,-]/", "Eko Kurniawan Khanndey, Programmer Zaman-Now");
var_dump($result);
