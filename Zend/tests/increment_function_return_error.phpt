--TEST--
It's not possible to increment the return value of a function
--FILE--
<?php

function test() {
    return 42;
}

++test();

?>
--EXPECTF--
Parse error: %s in %s on line %d
