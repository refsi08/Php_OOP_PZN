<?php

/*
Destructor -> Destructor adalah function yang akan dipanggil ketika dihapus dari memory
*/

class Person2
{
    const AUTHOR = "Programmer zaman now";

    var ?string $name = "Refsi";
    var ?string $address = null;
    var string $country = "Indonesia";

    function __destruct()
    {
        echo "Object Person $this->name is destroyed" . PHP_EOL;
    }
}

$person = new Person2();
echo "Program selesai" . PHP_EOL;
