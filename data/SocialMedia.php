<?php

/**
 * Kata kunci final bisa digunakan di class, dimana jika kita menggunakan kata kunci final sebelum
 * class, maka kita menandakan bahwa class tersebut tidak bisa diwariskan lagi.
 */
class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    /**
     * Jika sebuah function kita tambahkan kata kunci final, maka artinya funtion tersebut tidak bisa
     * di override lagi di class child nya
     */
    public function login(string $username, string $password): bool
    {
        return true;
    }
}

class FakeFacebook extends Facebook
{
    // function override
    public function login(string $username, string $password): bool
    {
        return false;
    }
}
