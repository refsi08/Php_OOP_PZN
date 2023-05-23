<?php

class Person
{
    var ?string $name;
    var ?string $address;
    var ?string $country;

    function sayHello(string $name) // membuat function di dalam class
    {
        echo "Hello $name" . PHP_EOL;
    }
}
// membuat object dalam class
$person = new Person();
$person->sayHello('Refsi');// memanggil function dalam class
