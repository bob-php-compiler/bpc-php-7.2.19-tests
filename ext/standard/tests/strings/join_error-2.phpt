--TEST--
Test join() function: error conditions
--FILE--
<?php
/* Prototype  : string join( string $glue, array $pieces )
 * Description: Join array elements with a string
 * Source code: ext/standard/string.c
 * Alias of function: implode()
*/

echo "*** Testing join() : error conditions ***\n";

// More than expected number of arguments
echo "\n-- Testing join() function with more than expected no. of arguments --\n";
$glue = 'string_val';
$pieces = array(1, 2);
$extra_arg = 10;

var_dump( join($glue, $pieces, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function join(): 2 at most, 3 provided in %s on line %d
 -- compile-error
