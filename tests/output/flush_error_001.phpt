--TEST--
Test wrong number of arguments for flush() (no impact)
--FILE--
<?php
/*
 * proto void flush(void)
 * Function is implemented in ext/standard/basic_functions.c.
 */

$extra_arg = 1;
echo "\nToo many arguments\n";
var_dump(flush($extra_arg));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function flush(): 0 at most, 1 provided in %s on line 9
 -- compile-error
