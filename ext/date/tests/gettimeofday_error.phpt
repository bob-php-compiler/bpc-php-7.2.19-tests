--TEST--
Test gettimeofday() function : error conditions
--FILE--
<?php
/* Prototype  : array gettimeofday([bool get_as_float])
 * Description: Returns the current time as array
 * Source code: ext/standard/microtime.c
 * Alias to functions:
 */

echo "*** Testing gettimeofday() : error conditions ***\n";


//Test gettimeofday with one more than the expected number of arguments
echo "\n-- Testing gettimeofday() function with more than expected no. of arguments --\n";
$get_as_float = true;
$extra_arg = 10;
var_dump( gettimeofday($get_as_float, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function gettimeofday(): 1 at most, 2 provided in %s on line %d
 -- compile-error
