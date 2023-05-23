<?php

define("APPLICATION", "Belajar PHP OOP"); // cara lama menggunakan keyword define
const APP_VERSION = "1.0.0"; // cara baru menggunakan keyword const agar nilai value tidak bisa diubah

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;


// mengakses constant di class
class Person
{
    const AUTHOR = "Programmer zaman now"; // properti constant

    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL; // mengganti nama class nya untuk constant menjadi keyword self karena masih dalam class yang sama
    }
}

$person = new Person();
$person->name = "Refsi";
$person->address = "Jambi";

$person->info();


// Mengakses properti const dan var berbeda
echo Person::AUTHOR . PHP_EOL; // mengakses properti constant berbeda dengan yg lain.

echo "Nama : {$person->name}" . PHP_EOL;
echo "Nama : {$person->address}" . PHP_EOL;
echo "Nama : {$person->country}" . PHP_EOL;
