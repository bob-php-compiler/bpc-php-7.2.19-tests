--TEST--
Writing to a temporary expression is not allowed
--FILE--
<?php

array(array(0), 1)[0][0] = 1;

?>
--EXPECTF--
Parse error: Cannot use temporary expression in write context in %s on line %d
