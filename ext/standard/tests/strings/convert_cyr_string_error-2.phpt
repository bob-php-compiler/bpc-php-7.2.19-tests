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

echo "*** Testing convert_cyr_string() : error conditions ***\n";

echo "\n-- Testing convert_cyr_string() function with no 'to' character set --\n";
var_dump( convert_cyr_string($str, $from) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function convert_cyr_string(): 3 required, 2 provided in %s on line %d
 -- compile-error
