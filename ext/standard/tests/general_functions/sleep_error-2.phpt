--TEST--
Test sleep() function : error conditions
--FILE--
<?php

echo "*** Testing sleep() : error conditions ***\n";

echo "\n-- Testing sleep() function with more than expected no. of arguments --\n";
$seconds = 10;
$extra_arg = 10;
var_dump( sleep($seconds, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function sleep(): 1 at most, 2 provided in %s on line %d
 -- compile-error
