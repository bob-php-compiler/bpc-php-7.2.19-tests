--TEST--
Test wrong number of arguments for microtime()
--FILE--
<?php
/*
 * proto mixed microtime([bool get_as_float])
 * Function is implemented in ext/standard/microtime.c
*/

$opt_arg_0 = true;
$extra_arg = 1;

echo "\n-- Too many arguments --\n";
var_dump(microtime($opt_arg_0, $extra_arg));
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function microtime(): 1 at most, 2 provided in %s on line %d
 -- compile-error
