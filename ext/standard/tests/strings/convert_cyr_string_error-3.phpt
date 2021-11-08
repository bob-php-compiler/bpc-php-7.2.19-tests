--TEST--
Test convert_cyr_string() function : error conditions
--FILE--
<?php

/* Prototype  : string convert_cyr_string  ( string $str  , string $from  , string $to  )
 * Description: Convert from one Cyrillic character set to another
 * Source code: ext/standard/string.c
*/

$str = "hello";
$from = "k";
$to = "d";
$extra_arg = 10;

echo "*** Testing convert_cyr_string() : error conditions ***\n";

echo "\n-- Testing convert_cyr_string() function with more than expected no. of arguments --\n";
var_dump( convert_cyr_string($str, $from, $to, $extra_arg) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function convert_cyr_string(): 3 at most, 4 provided in %s on line %d
 -- compile-error
