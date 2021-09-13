--TEST--
Constexpr arrays should be able to handle resource keys
--FILE--
<?php

define('FOO', array(STDIN => 42));
var_dump(FOO);

?>
--EXPECTF--
Notice: Resource ID#%d used as offset, casting to integer (%d) in %s on line %d
array(1) {
  [%d]=>
  int(42)
}
