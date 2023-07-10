<?php

namespace Data;

require_once "Animal.php";

interface Animalshelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements Animalshelter
{
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements Animalshelter
{
    public function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}
