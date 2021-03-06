--TEST--
list() with keys and a trailing comma
--SKIPIF--
skip not support nested list and `[]` list and keyed list
--FILE--
<?php

$antonyms = [
    "good" => "bad",
    "happy" => "sad",
];

list(
    "good" => $good,
    "happy" => $happy
) = $antonyms;

var_dump($good, $happy);

echo PHP_EOL;

$antonyms = [
    "good" => "bad",
    "happy" => "sad",
];

list(
    "good" => $good,
    "happy" => $happy,
) = $antonyms;

var_dump($good, $happy);

?>
--EXPECT--
string(3) "bad"
string(3) "sad"

string(3) "bad"
string(3) "sad"
