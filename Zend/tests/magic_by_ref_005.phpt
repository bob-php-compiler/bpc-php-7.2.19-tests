--TEST--
passing parameter of __isset() by ref
--FILE--
<?php

class test {
    function __isset(&$name) { }
}

$t = new test;
$name = "prop";

var_dump(isset($t->$name));

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Method test::__isset() cannot take arguments by reference in %s on line %d
 -- compile-error
