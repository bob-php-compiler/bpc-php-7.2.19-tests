--TEST--
Test ob_clean() function : error conditions
--FILE--
<?php
/* Prototype  : proto bool ob_clean(void)
 * Description: Clean (delete) the current output buffer
 * Source code: main/output.c
 * Alias to functions:
 */

echo "*** Testing ob_clean() : error conditions ***\n";

// One argument
echo "\n-- Testing ob_clean() function with one argument --\n";
$extra_arg = 10;
var_dump( ob_clean($extra_arg) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_clean(): 0 at most, 1 provided in %s on line 13
 -- compile-error
