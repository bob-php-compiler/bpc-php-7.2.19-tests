--TEST--
Test is_resource() function : error conditions
--FILE--
<?php
/* Prototype  : bool is_resource  ( mixed $var  )
 * Description:  Finds whether a variable is a resource
 * Source code: ext/standard/type.c
 */

echo "*** Testing is_resource() : error conditions ***\n";

echo "\n-- Testing is_resource() function with more than expected no. of arguments --\n";
$res = fopen(__FILE__, "r");
$extra_arg = 10;
var_dump( is_resource($res, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_resource(): 1 at most, 2 provided in %s on line %d
 -- compile-error
