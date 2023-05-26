<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Refsi");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

$company->programmer = new FrontEndProgrammer("Eko");
var_dump($company);

var_dump(sayHelloProgrammer(new Programmer("Refsi")));
sayHelloProgrammer(new BackendProgrammer("Refsi"));
sayHelloProgrammer(new FrontEndProgrammer("Refsi"));
