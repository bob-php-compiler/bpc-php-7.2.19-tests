--TEST--
passing parameter of __get() by ref
--FILE--
<?php

class test {
    function __get(&$name) { }
}

$t = new test;
$name = "prop";
var_dump($t->$name);

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Method test::__get() cannot take arguments by reference in %s on line %d
 -- compile-error
