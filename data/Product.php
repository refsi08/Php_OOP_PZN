<?php

class Product
{
    protected string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() // mengambil get nama
    {
        return $this->name; // mengembalikan nilai nama
    }

    public function getPrice() // mengambil get price
    {
        return $this->price; // mengembalikan nilai price
    }
}

class ProductDummy extends Product
{
    function info()
    {
        echo "Ini adalah buah $this->name" . PHP_EOL; // name bisa diakses daari class product karna visibility nya sudah diubah menjadi protected
    }
}
