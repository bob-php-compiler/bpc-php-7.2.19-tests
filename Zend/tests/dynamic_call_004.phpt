--TEST--
Testing dynamic call with undefined variables
--FILE--
<?php

$a::$b();

?>
--EXPECTF--
Fatal error: Uncaught Error: Class name must be a valid object or a string in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
