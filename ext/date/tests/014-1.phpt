--TEST--
timezone_offset_get() tests
--FILE--
<?php
var_dump(timezone_offset_get());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function timezone_offset_get(): 2 required, 0 provided in %s on line %d
 -- compile-error
