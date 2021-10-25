--TEST--
Test chr() function : error conditions
--FILE--
<?php

/* Prototype  : string chr  ( int $ascii  )
 * Description: Return a specific character
 * Source code: ext/standard/string.c
*/

echo "*** Testing chr() : error conditions ***\n";

echo "\n-- Testing chr() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( chr(72, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function chr(): 1 at most, 2 provided in %s on line %d
 -- compile-error
