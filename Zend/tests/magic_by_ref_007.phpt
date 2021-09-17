--TEST--
passing second parameter of __call() by ref
--FILE--
<?php

class test {
    function __call($name, &$args) { }
}

$t = new test;
$func = "foo";
$arg = 1;

$t->$func($arg);

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Method test::__call() cannot take arguments by reference in %s on line %d
 -- compile-error
