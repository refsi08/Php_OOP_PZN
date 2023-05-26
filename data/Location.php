<?php

namespace Data;

use Locale;

abstract class Location  // contoh abstract class
{
    var string $name;
}


class City extends Location
{
}

class Province extends Location
{
}


class Country extends Location
{
}
