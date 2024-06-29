--TEST--
Bug #69599: Strange generator+exception+variadic crash
--FILE--
<?php

function crash() {
    sin(...[0]);
    throw new Exception();
    yield;
}

iterator_to_array(crash());

?>
--EXPECTF--
Fatal error: Uncaught Exception in %s:%d
Stack trace:
#0 [internal function]: crash()
#1 [internal function]: Generator->rewind()
#2 %s(%d): iterator_to_array(Object(Generator), true)
#3 {main}
  thrown in %s on line %d
