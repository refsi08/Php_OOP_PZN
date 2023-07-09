<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static Function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "Refsi";
$zero->middleName = "Maulana";
$zero->lastName = "Siregar";

echo "First Name  : $zero->firstName" . PHP_EOL;
echo "Middle Name  : $zero->middleName" . PHP_EOL;
echo "Last Name  : $zero->lastName" . PHP_EOL;

// Memanggil function dinamis tanpa membuat funtion tersebut dengan mengggunakan magic function __call()
$zero->sayHello("Refsi", "Maulana");

// Memanggil static function dinamis tanpa membuat static funtion tersebut dengan mengggunakan magic function __callStatic()
Zero::sayHello("Refsi", "Maulana");
