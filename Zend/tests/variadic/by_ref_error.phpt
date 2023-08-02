--TEST--
By-ref variadics enforce the reference
--SKIPIF--
skip TODO: defbuiltin-v store-signature minimum-arity
--FILE--
<?php

function test(&... $args) { }

test(1);

?>
--EXPECTF--
Fatal error: Only variables can be passed by reference in %s on line %d
