--TEST--
Test stristr() function : error conditions
--FILE--
<?php

/* Prototype: string stristr  ( string $haystack  , mixed $needle  [, bool $before_needle  ] )
   Description: Case-insensitive strstr()
*/
echo "*** Testing stristr() : error conditions ***\n";

echo "\n-- Testing stristr() function with no arguments --\n";
var_dump( stristr("") );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function stristr(): 2 required, 1 provided in %s on line %d
 -- compile-error
