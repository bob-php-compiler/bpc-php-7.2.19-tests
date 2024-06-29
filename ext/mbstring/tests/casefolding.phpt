--TEST--
Case-insensitive string comparisons use case folding
--SKIPIF--
<?php
if (!extension_loaded("mbstring")) {
    die("skip mbstring extension not loaded\n");
}
?>
--FILE--
<?php

$tests = [
    ["K", "K"],
    ["k", "K"],
    ["Å", "Å"],
    ["å", "Å"],
    ["ß", "ẞ"],
    ["Θ", "ϴ"],
    ["θ", "ϴ"],
    ["ϑ", "ϴ"],
    ["Ω", "Ω"],
    ["ω", "Ω"],
    ["I", "ı"],
    ["i", "ı"],
];

foreach ($tests as $test) {
    var_dump(mb_stripos($test[0], $test[1]));
}

?>
--EXPECT--
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
int(0)
bool(false)
bool(false)
