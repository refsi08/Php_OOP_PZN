<?php

namespace Helper;

class MathHelper
{
    // static properties
    static public string $name = "MathHelper.com";

    // static function
    static public function sum(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}
