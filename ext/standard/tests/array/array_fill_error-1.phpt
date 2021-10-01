--TEST--
Test array_fill() function : error conditions
--FILE--
<?php
/* Prototype  : proto array array_fill(int start_key, int num, mixed val)
 * Description: Create an array containing num elements starting with index start_key each initialized to val
 * Source code: ext/standard/array.c
*/


echo "*** Testing array_fill() : error conditions ***\n";

// More than  expected number of arguments
echo "-- Testing array_fill() function with more than expected no. of arguments --\n";
$start_key = 0;
$num = 2;
$val = 1;
$extra_arg = 10;
var_dump( array_fill($start_key,$num,$val, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_fill(): 3 at most, 4 provided in %s on line %d
 -- compile-error
