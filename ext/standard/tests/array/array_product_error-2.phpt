--TEST--
Test array_product() function : error conditions
--FILE--
<?php
/* Prototype  : mixed array_product(array input)
 * Description: Returns the product of the array entries
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_product() : error conditions ***\n";

//Test array_product with one more than the expected number of arguments
echo "\n-- Testing array_product() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$extra_arg = 10;
var_dump( array_product($input, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_product(): 1 at most, 2 provided in %sarray_product_error-2.php on line %d
 -- compile-error
