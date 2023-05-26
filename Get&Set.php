<?php

// membuat objek
// mengubah data = set()
// memanggil data = get()
require_once "data/Category.php";


$category = new Category();
$category->setName("Ganteng"); // mengubah data menggunakan set
echo $category->getName(); // memanggil data menggunakan get


$category = new Category();
$category->setExpensive(true);
echo $category->isExpensive();

