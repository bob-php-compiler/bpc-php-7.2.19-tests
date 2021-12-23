--TEST--
Test uniqid() function : error conditions
--FILE--
<?php
/* Prototype  : string uniqid  ([ string $prefix= ""  [, bool $more_entropy= false  ]] )
 * Description: Gets a prefixed unique identifier based on the current time in microseconds.
 * Source code: ext/standard/uniqid.c
*/
echo "*** Testing uniqid() : error conditions ***\n";

echo "\n-- Testing uniqid() function with more than expected no. of arguments --\n";
$prefix = null;
$more_entropy = false;
$extra_arg = false;
var_dump(uniqid($prefix, $more_entropy, $extra_arg));

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function uniqid(): 2 at most, 3 provided in %s on line %d
 -- compile-error
