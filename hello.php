<?php

$count = 10;
$size = 2;

var_dump($count + 5);
var_dump($count * $size);

$price = 2.95;
$quantity = 5;

var_dump($price * $quantity);

$message = "Hello";
$name = "Dave";

echo $message . " " . $name;

$string_price = "150";
$int_quantity = 3;

$string_price = $string_price * $int_quantity;

var_dump($string_price);

$is_editor = true;
$is_admin = false;

var_dump($is_editor or $is_admin);
var_dump($is_editor and $is_admin);

$start = "3 o' clock";
$end = '4 o\' clock';

echo $start, $end;

$days = "Monday\nTuesday\nWednesday";
echo $days;

echo "Hello" . $name;
echo "Hello $name";
