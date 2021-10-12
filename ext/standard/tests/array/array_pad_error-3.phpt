--TEST--
Test array_pad() function : error conditions
--FILE--
<?php
/* Prototype  : array array_pad(array $input, int $pad_size, mixed $pad_value)
 * Description: Returns a copy of input array padded with pad_value to size pad_size
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_pad() : error conditions ***\n";

// Testing array_pad with less than the expected number of arguments
echo "\n-- Testing array_pad() function with less than expected no. of arguments --\n";
$input = array(1, 2);
var_dump( array_pad($input) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_pad(): 3 required, 1 provided in %s on line %d
 -- compile-error
