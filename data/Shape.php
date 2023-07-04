<?php
// parent Keyword

namespace data;

class Shape
{
    function getCorner(): int
    {
        return 12;
    }
}

class Rectangle extends Shape
{
    function getCorner(): int
    {
        return 4;
    }

    function getParentCorner(): int
    {
        return parent::getCorner(); // mengambil function yang ada di parent class menggunakan kata kunci parent
    }
}
