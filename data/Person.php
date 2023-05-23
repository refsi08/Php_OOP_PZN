<?php
// - Membuat class menggunkan kata kunci class
// - Penamaan class biasa menggunakan format CamelCase
//class
class Person
{
    // properties
    // string menandakan property type declaration (tidak bisa bertipe lain selain string)
    var ?string $name; // tanda tanya untuk nullable (data boleh null)
    var string $address;
    var string $country = "Indonesia"; //properti default value
}
