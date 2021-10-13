--TEST--
Test array_rand() function : error conditions
--FILE--
<?php
/* Prototype  : mixed array_rand(array input [, int num_req])
 * Description: Return key/keys for random entry/entries in the array
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_rand() : error conditions ***\n";

//Test array_rand with one more than the expected number of arguments
echo "\n-- Testing array_rand() function with more than expected no. of arguments --\n";
$input = array(1, 2);
$num_req = 10;
$extra_arg = 10;
var_dump( array_rand($input,$num_req, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_rand(): 2 at most, 3 provided in %s on line %d
 -- compile-error
