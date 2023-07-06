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

trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

// trait inheritance
trait All
{
    // semua function bisa di gunakan di class person
    use SayGoodBye, SayHello, HasName, CanRun;
    // bisa di overrida public->private
    // hello as private;
    // goodBye as private;
}

class Person extends ParentPerson
{
    // trait inheritance menggunakan kata kunci use
    use All;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
