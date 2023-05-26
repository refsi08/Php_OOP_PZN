<?php

class Category
{
    // Propert harus private
    private string $name;
    private bool $expensive;


    // function get dan set untuk property $name
    public function getName(): string  // get untuk mengambil data
    {
        return "Kamu orang yang dikategorikan $this->name". PHP_EOL;
    }

    public function setName(string $name): void // set untuk mengubah data
    {
        $this->name = $name;
    }

    // function get dan set untuk property $expensive
    public function isExpensive(): string
    {
        return" $this->expensive";
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }
}
