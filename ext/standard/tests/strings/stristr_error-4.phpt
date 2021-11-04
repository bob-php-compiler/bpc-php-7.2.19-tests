--TEST--
Test stristr() function : error conditions
--FILE--
<?php

/* Prototype: string stristr  ( string $haystack  , mixed $needle  [, bool $before_needle  ] )
   Description: Case-insensitive strstr()
*/
echo "*** Testing stristr() : error conditions ***\n";

echo "\n-- Testing stristr() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( stristr("Hello World",  "World", true, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function stristr(): 3 at most, 4 provided in %s on line %d
 -- compile-error
