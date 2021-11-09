--TEST--
Test unpack() function : error conditions
--FILE--
<?php

/* Prototype  : array unpack  ( string $format  , string $data  )
 * Description: Unpack data from binary string
 * Source code: ext/standard/pack.c
*/

echo "*** Testing unpack() : error conditions ***\n";

echo "\n-- Testing unpack() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump(unpack("I", pack("I", 65534), 0, $extra_arg));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function unpack(): 3 at most, 4 provided in %s on line %d
 -- compile-error
