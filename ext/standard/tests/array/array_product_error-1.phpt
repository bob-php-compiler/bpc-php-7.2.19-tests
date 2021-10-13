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

// Zero arguments
echo "\n-- Testing array_product() function with Zero arguments --\n";
var_dump( array_product() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_product(): 1 required, 0 provided in %sarray_product_error-1.php on line %d
 -- compile-error
