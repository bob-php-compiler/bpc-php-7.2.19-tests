--TEST--
Test ob_get_contents() function : error cases
--CREDITS--
Iain Lewis <ilewis@php.net>
--FILE--
<?php
/* Prototype  : proto string ob_get_contents(void)
 * Description: Return the contents of the output buffer
 * Source code: main/output.c
 * Alias to functions:
 */


echo "*** Testing ob_get_contents() : error cases ***\n";

var_dump(ob_get_contents("bob"));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_get_contents(): 0 at most, 1 provided in %s on line 11
 -- compile-error
