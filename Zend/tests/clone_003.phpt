--TEST--
Using clone statement on undefined variable
--FILE--
<?php

$a = clone $b;

?>
--EXPECTF--
Fatal error: Uncaught Error: __clone method called on non-object in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
