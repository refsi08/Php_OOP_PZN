<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
}

class FrontEndProgrammer extends programmer
{
}

class Company
{
    public Programmer $programmer;
}

// contoh polymorphism untuk function
function sayHelloProgrammer(Programmer $programmer)
{
    return "Hello Programmer $programmer->name" . PHP_EOL;
}

// contoh Type Check & Cast
function sayHelloDeveloper(Programmer $programmer)
{
    if ($programmer instanceof FrontEndProgrammer) {
        echo "Hello FrontEnd Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof BackendProgrammer) {
        echo "Hello BackEnd Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
