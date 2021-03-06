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
/* Prototype  : string money_format  ( string $format  , float $number  )
 * Description: Formats a number as a currency string
 * Source code: ext/standard/string.c
*/

// ===========================================================================================
// = We do not test for exact return-values, as those might be different between OS-versions =
// ===========================================================================================

$string = '%14#8.2n';
$value = 1234.56;

echo "*** Testing money_format() : error conditions ***\n";

echo "\n-- Testing money_format() function with more than one token --\n";
var_dump( money_format($string . $string, $value) );
?>
===DONE===
--EXPECTF--
*** Testing money_format() : error conditions ***

-- Testing money_format() function with more than one token --

Warning: money_format(): Only a single %ci or %cn token can be used in %s on line %d
bool(false)
===DONE===
