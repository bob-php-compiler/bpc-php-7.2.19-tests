--TEST--
Bug #69957 (Different ways of handling div/mod by zero)
--FILE--
<?php
$result = 1 % 0;
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Modulo by zero in %s on line %d
 -- compile-error
