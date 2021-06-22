--TEST--
Test ob_get_level() function : error conditions
--FILE--
<?php
/* Prototype  : proto int ob_get_level(void)
 * Description: Return the nesting level of the output buffer
 * Source code: main/output.c
 * Alias to functions:
 */

echo "*** Testing ob_get_level() : error conditions ***\n";

// One argument
echo "\n-- Testing ob_get_level() function with one argument --\n";
$extra_arg = 10;
var_dump( ob_get_level($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_get_level(): 0 at most, 1 provided in %s on line 13
 -- compile-error
