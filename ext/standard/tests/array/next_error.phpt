--TEST--
Test next() function : error conditions - Pass incorrect number of arguments
--FILE--
<?php
/* Prototype  : mixed next(array $array_arg)
 * Description: Move array argument's internal pointer to the next element and return it
 * Source code: ext/standard/array.c
 */

/*
 * Pass incorrect number of arguments to next() to test behaviour
 */

echo "*** Testing next() : error conditions ***\n";

// Zero arguments
echo "\n-- Testing next() function with Zero arguments --\n";
var_dump( next() );

//Test next with one more than the expected number of arguments
echo "\n-- Testing next() function with more than expected no. of arguments --\n";
$array_arg = array(1, 2);
$extra_arg = 10;
var_dump( next($array_arg, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function next(): 1 required, 0 provided in %s on line %d
 -- compile-error
