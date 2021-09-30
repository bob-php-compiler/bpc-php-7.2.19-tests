--TEST--
Test array_column() function: error conditions
--FILE--
<?php
/* Prototype:
 *  array array_column(array $input, mixed $column_key[, mixed $index_key]);
 * Description:
 *  Returns an array containing all the values from
 *  the specified "column" in a two-dimensional array.
 */

echo "*** Testing array_column() : error conditions ***\n";

echo "\n-- Testing array_column() function with Zero arguments --\n";
var_dump(array_column());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_column(): 2 required, 0 provided in %s on line %d
 -- compile-error
