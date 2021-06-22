--TEST--
Test wrong number of arguments for ob_end_clean()
--FILE--
<?php
/*
 * proto bool ob_end_clean(void)
 * Function is implemented in main/output.c
*/

$extra_arg = 1;

echo "\nToo many arguments\n";
var_dump(ob_end_clean($extra_arg));


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_end_clean(): 0 at most, 1 provided in %s on line 10
 -- compile-error
