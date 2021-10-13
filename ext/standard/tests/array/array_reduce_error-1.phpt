--TEST--
Test array_reduce() function : error conditions
--FILE--
<?php
/* Prototype  : mixed array_reduce(array input, mixed callback [, int initial])
 * Description: Iteratively reduce the array to a single value via the callback.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_reduce() : error conditions ***\n";


// Testing array_reduce with one less than the expected number of arguments
echo "\n-- Testing array_reduce() function with less than expected no. of arguments --\n";
$input = array(1, 2);
var_dump( array_reduce($input) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_reduce(): 2 required, 1 provided in %sarray_reduce_error-1.php on line %d
 -- compile-error
