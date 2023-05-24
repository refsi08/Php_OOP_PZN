<?php
// Membuat parent class manager
class Manager
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hello $name, my name is $this->name" . PHP_EOL;
    }
}

// membuat Child class supervisor
class Supervisor extends Manager
{
}
