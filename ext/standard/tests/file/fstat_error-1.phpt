--TEST--
Test function fstat() by calling it more than or less than its expected arguments
--FILE--
<?php

var_dump(fstat());

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function fstat(): 1 required, 0 provided in %s on line %d
 -- compile-error
