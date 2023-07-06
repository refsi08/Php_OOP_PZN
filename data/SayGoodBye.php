<?php

// namespace
namespace Data\Traits;

// trait menyimpan function-funtion yang bisa diguanakan ulang beberapa class
trait SayGoodBye
{
    function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye null" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello null" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    // trait bisa diberikan properties
    public string $name;
}

class Person
{
    // semua function bisa di gunakan di class person
    use SayGoodBye, SayHello, HasName;
}
