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

echo "*** Testing money_format() : error conditions ***\n";

echo "\n-- Testing money_format() function with insufficient arguments --\n";
var_dump( money_format($string) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function money_format(): 2 required, 1 provided in %s on line %d
 -- compile-error
