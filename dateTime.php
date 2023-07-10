<?php

// set DateTime()
$dateTime = new DateTime();
$dateTime->setDate(2022, 02, 03); // set date (year, month, date)
$dateTime->setTime(10, 20, 12, 0); // set time (hour, minutes, second)

// set DateInterval()
$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));

if ($date) {
    var_dump($date);
} else {
    echo "Format Salah";
}
