<?php

interface HelloWorld
{
    function sayHello(): void;
}

/**
 * Anonymous class atau class tanpa nama.
 */
$helloWorld = new class("Refsi") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();
