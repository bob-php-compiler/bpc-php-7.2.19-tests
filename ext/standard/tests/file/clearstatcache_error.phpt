--TEST--
Test clearstatcache() function: error conditions
--FILE--
<?php
/*
   Prototype: void clearstatcache ([bool clear_realpath_cache[, filename]]);
   Description: clears files status cache
*/

echo "*** Testing clearstatcache() function: error conditions ***\n";
var_dump( clearstatcache(0, "/foo/bar", 1) );  //No.of args more than expected
echo "*** Done ***\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function clearstatcache(): 2 at most, 3 provided in %s on line %d
 -- compile-error
