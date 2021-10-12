--TEST--
Test array_pad() function : error conditions
--FILE--
<?php
/* Prototype  : array array_pad(array $input, int $pad_size, mixed $pad_value)
 * Description: Returns a copy of input array padded with pad_value to size pad_size
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_pad() : error conditions ***\n";

//Test array_pad with one more than the expected number of arguments
echo "\n-- Testing array_pad() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$pad_size = 10;
$pad_value = 1;
$extra_arg = 10;
var_dump( array_pad($input, $pad_size, $pad_value, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_pad(): 3 at most, 4 provided in %s on line %d
 -- compile-error
