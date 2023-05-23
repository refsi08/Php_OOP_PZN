<?php

// Keyword atau kata kunci this digunakan untuk mengakses object saat ini
class HelloWorld
{
    var string $name;
    var string $address = "Jambi";
    var string $country = "Indonesia";

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my Name is $this->name" . PHP_EOL; // jika argument funtion null maka mengambil properti object saat ini menggunakan keyword this
        } else {
            echo "Hello i'm $name, how are you ? $this->name" . PHP_EOL;
        }
    }
}

// apabila object memberikan nilai argument function 
$helloWorld = new HelloWorld();
$helloWorld->name = "refsi";
$helloWorld->sayHello('Rere');

// apabila object tidak memberikan nilai argument function 
$helloWorld2 = new HelloWorld();
$helloWorld2->name = "refsi";
$helloWorld2->sayHello(null);

var_dump($helloWorld2);
