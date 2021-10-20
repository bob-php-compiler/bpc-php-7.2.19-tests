--TEST--
Test shuffle() function : error conditions
--FILE--
<?php
/* Prototype  : bool shuffle(array $array_arg)
 * Description: Randomly shuffle the contents of an array
 * Source code: ext/standard/array.c
*/

/* Test shuffle() to see that warning messages are emitted
 * when invalid number of arguments are passed to the function
*/

echo "*** Testing shuffle() : error conditions ***\n";

// more than the expected number of arguments
echo "\n-- Testing shuffle() function with more than expected no. of arguments --\n";
$array_arg = array(1, "two" => 2);
$extra_arg = 10;
var_dump( shuffle($array_arg, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function shuffle(): 1 at most, 2 provided in %s on line %d
 -- compile-error
