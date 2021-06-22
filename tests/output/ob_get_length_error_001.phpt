--TEST--
Test wrong number of arguments for ob_get_length()
--FILE--
<?php
/*
 * proto int ob_get_length(void)
 * Function is implemented in main/output.c
*/

$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(ob_get_length($extra_arg));


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_get_length(): 0 at most, 1 provided in %s on line 10
 -- compile-error
