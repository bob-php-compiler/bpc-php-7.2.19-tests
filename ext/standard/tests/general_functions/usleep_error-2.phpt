--TEST--
Test usleep() function : error conditions
--FILE--
<?php

echo "*** Testing usleep() : error conditions ***\n";

echo "\n-- Testing usleep() function with more than expected no. of arguments --\n";
$seconds = 10;
$extra_arg = 10;
var_dump( usleep($seconds, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function usleep(): 1 at most, 2 provided in %s on line %d
 -- compile-error
