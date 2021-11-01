--TEST--
Test money_format() function : error conditions
--SKIPIF--
<?php
	if (!function_exists('money_format')) {
		die("SKIP money_format - not supported\n");
	}
?>
--FILE--
<?php

$string = '%14#8.2n';
$value = 1234.56;
$extra_arg = 10;

echo "*** Testing money_format() : error conditions ***\n";

echo "\n-- Testing money_format() function with more than expected no. of arguments --\n";
var_dump( money_format($string, $value, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function money_format(): 2 at most, 3 provided in %s on line %d
 -- compile-error
