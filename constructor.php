<?php

class Person
{
    const AUTHOR = "Programmer zaman now";

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}

// membuat project untuk constructor harus mengisi parameter dari function 
$person = new Person("Refsi", "Jambi"); // berisikan 2 parameter
var_dump($person);
