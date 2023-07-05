<?php

namespace Data;

interface Car
{
    function drive(): void ;

    function getTired() : int;
}

class Avanza implements Car
{
    function drive(): void
    {
        echo "Drive Avanza". PHP_EOL;
    }

    function getTired() : int
    {
        return 4;
    }
}
