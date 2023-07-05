<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Refsi");
var_dump($company);

$company->programmer = new BackendProgrammer("Eko");
var_dump($company);

$company->programmer = new FrontEndProgrammer("Eko");
var_dump($company);

sayHelloDeveloper(new Programmer("Refsi"));
sayHelloDeveloper(new BackendProgrammer("Refsi"));
sayHelloDeveloper(new FrontEndProgrammer("Refsi"));
