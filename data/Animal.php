<?php
// membuat abstract di function

namespace Data;

require_once "data/Food.php";

abstract class Animal
{ // class harus bersifat abstract juga saat membuat function abstract
    var string $name;

    abstract function run(); // function menjadi abstract

    abstract function eat(AnimalFood $animalFood):void;
}

class Cat extends Animal
{
    // wajib mengoverrid function yang abstract pada class parent
    function run()
    {
        echo "Animal $this->name is running" . PHP_EOL;
    }

    function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating". PHP_EOL;
    }
}

class Dog extends Animal
{
    // wajib mengoverrid function yang abstract pada class parent
    function run()
    {
        echo "Animal $this->name is running" . PHP_EOL;
    }

    function eat(Food $animalFood): void
    {
        echo "Dog is eating". PHP_EOL;
    }
}
