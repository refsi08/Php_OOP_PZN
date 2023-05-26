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
