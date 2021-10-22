--TEST--
Test mt_getrandmax() - wrong paramas mt_getrandmax()
--FILE--
<?php
var_dump(mt_getrandmax(true));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mt_getrandmax(): 0 at most, 1 provided in %s on line 2
 -- compile-error
