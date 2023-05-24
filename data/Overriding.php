<?php
// Overriding -> kemampuan mendeklarasikan ulang function di child class yang ada di parent class

class Manager
{
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    // function overriding mendeklarasikan function dari class parent
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is vp $this->name" . PHP_EOL;
    }
}
