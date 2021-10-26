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

// Zero argument
echo "\n-- Testing join() function with Zero arguments --\n";
var_dump( join() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function join(): 1 required, 0 provided in %s on line %d
 -- compile-error
