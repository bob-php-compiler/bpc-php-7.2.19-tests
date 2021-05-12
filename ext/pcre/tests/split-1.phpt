--TEST--
preg_split()
--FILE--
<?php

var_dump(preg_split());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function preg_split(): 2 required, 0 provided in %ssplit-1.php on line 3
 -- compile-error
