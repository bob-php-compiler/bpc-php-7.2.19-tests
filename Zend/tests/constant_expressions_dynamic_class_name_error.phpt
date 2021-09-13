--TEST--
Dynamic class names can't be used in compile-time constant refs
--FILE--
<?php

$foo = 'test';
define('C', $foo::BAR);

?>
--EXPECTF--
Fatal error: Uncaught Error: Class 'test' not found in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
