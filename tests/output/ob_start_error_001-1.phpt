--TEST--
Test wrong number of arguments and wrong arg types for ob_start()
--FILE--
<?php
/*
 * proto bool ob_start([ string|array user_function [, int chunk_size [, bool erase]]])
 * Function is implemented in main/output.c
*/

function justPrint($str) {
	return $str;
}

$arg_1 = "justPrint";
$arg_2 = 0;
$arg_3 = false;
$extra_arg = 1;

echo "\n- Too many arguments\n";
var_dump(ob_start($arg_1, $arg_2, $arg_3, $extra_arg));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_start(): 3 at most, 4 provided in %s on line 17
 -- compile-error
