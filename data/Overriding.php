<?php
// Overriding -> kemampuan mendeklarasikan ulang function di child class yang ada di parent class

class Manager
{
    var string $name;
    var string $title;

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is manager $this->name" . PHP_EOL;
    }

    // constructor overriding
    function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }
}

class VicePresident extends Manager
{
    // function overriding mendeklarasikan function dari class parent
    function sayHello(string $name): void
    {
        echo "Hi $name, my name is vp $this->name" . PHP_EOL;
    }

    // function constructor overriding mendeklarasikan function dari class parent
    function __construct(string $name = "")
    {
        // tidak wajib, tapi direkomendasikan
        parent::__construct($name, "VP");
    }
}
