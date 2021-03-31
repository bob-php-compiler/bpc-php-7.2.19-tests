--TEST--
localtime() and too many arguments
--FILE--
<?php
var_dump(localtime(1,1,1));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function localtime(): 2 at most, 3 provided in %s on line %d
 -- compile-error
