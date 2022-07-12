--TEST--
hash_init() function - errors test
--FILE--
<?php
echo "*** Testing hash_init(): error conditions ***\n";

echo "-- Testing hash_init() function with no parameters --\n";
var_dump(hash_init());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_init(): 1 required, 0 provided in %s on line %d
 -- compile-error
