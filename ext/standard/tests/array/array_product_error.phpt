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

echo "\n-- Testing array_product() function incorrect argument type --\n";
var_dump( array_product("bob") );

?>
===DONE===
--EXPECTF--
*** Testing array_product() : error conditions ***

-- Testing array_product() function incorrect argument type --

Warning: array_product() expects parameter 1 to be array, string given in %sarray_product_error.php on line %d
NULL
===DONE===
