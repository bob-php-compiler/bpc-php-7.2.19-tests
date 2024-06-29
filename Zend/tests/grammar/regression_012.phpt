--TEST--
Testing for regression on const list syntax and arrays
--FILE--
<?php

class A {
    const A = [1, FOREACH];
}

?>
--EXPECTF--
Parse error: %s in %s on line %d
