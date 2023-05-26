<?php
// membuat abstract di function

namespace Data;

abstract class Animal
{ // class harus bersifat abstract juga saat membuat function abstract
    var string $name;


    abstract function run(); // function menjadi abstract
}

class Cat extends Animal
{
    // wajib mengoverrid function yang abstract pada class parent
    function run()
    {
        echo "Animal $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    // wajib mengoverrid function yang abstract pada class parent
    function run()
    {
        echo "Animal $this->name is running" . PHP_EOL;
    }
}
