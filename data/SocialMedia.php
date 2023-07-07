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
}

class FakeFacebook extends Facebook
{
}
