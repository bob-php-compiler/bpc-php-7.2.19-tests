--TEST--
Generator wit type check
--FILE--
<?php
function gen(array $a) { yield; }
gen(42)->rewind();
?>
--EXPECTF--
Fatal error: Uncaught TypeError: Argument 1 passed to gen() must be of the type array, integer given in %sgenerator_with_type_check.php:2
Stack trace:
#0 [internal function]: gen(42)
#1 %sgenerator_with_type_check.php(3): Generator->rewind()
#2 {main}
  thrown in %sgenerator_with_type_check.php on line %d
