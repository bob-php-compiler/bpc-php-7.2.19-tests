--TEST--
Test array_flip() function : error conditions
--FILE--
<?php
/* Prototype  : array array_flip(array $input)
 * Description: Return array with key <-> value flipped
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_flip() : error conditions ***\n";

//one more than the expected number of arguments
echo "-- Testing array_flip() function with more than expected no. of arguments --\n";
$input = array(1 => 'one', 2 => 'two');
$extra_arg = 10;
var_dump( array_flip($input, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_flip(): 1 at most, 2 provided in %s on line %d
 -- compile-error
