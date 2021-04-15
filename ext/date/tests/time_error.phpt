--TEST--
Test wrong number of arguments for time()
--FILE--
<?php
/*
 * proto int time(void)
 * Function is implemented in ext/date/php_date.c
*/

// Extra arguments are ignored
$extra_arg = 1;
echo "\nToo many arguments\n";
var_dump (time($extra_arg));
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function time(): 0 at most, 1 provided in %s on line %d
 -- compile-error
