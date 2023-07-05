<?php

namespace Data;

// interface hasbrand
interface HasBrand
{
    function getBrand(): string;
}

// interface ismaintenance
interface IsMaintenance
{
    function isMaintenance(): bool;
}

// interface car dan merupakan turunan dari interface hasbrand. menggunakan kata kunci extends
interface Car extends HasBrand
{
    function drive(): void;

    function getTired(): int;
}

// class Avanza dan merupakan turunan dari interface Car dan isMaintenance. menggunakan kata kunci implements
class Avanza implements Car, isMaintenance
{
    function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    function getTired(): int
    {
        return 4;
    }

    function getBrand(): string
    {
        return "Toyota";
    }

    function isMaintenance(): bool
    {
        return false;
    }
}

/**
 * semua turunan interface semua method pada function wajib ditutunkan pada class child nya
 */
