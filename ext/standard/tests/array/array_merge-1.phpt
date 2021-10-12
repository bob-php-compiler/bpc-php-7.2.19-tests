--TEST--
Test array_merge() function
--FILE--
<?php

echo "\n*** Testing error conditions ***";
/* Invalid arguments */
var_dump(array_merge());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_merge(): 1 required, 0 provided in %s on line %d
 -- compile-error
