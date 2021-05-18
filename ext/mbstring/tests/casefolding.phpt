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

$tests = array(
    array("K", "K"),
    array("k", "K"),
    array("Å", "Å"),
    array("å", "Å"),
    array("ß", "ẞ"),
    array("Θ", "ϴ"),
    array("θ", "ϴ"),
    array("ϑ", "ϴ"),
    array("Ω", "Ω"),
    array("ω", "Ω"),
    array("I", "ı"),
    array("i", "ı"),
);

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
