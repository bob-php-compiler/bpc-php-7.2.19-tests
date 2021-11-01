--TEST--
Test md5() function : error conditions
--FILE--
<?php
/* Prototype  : string md5  ( string $str  [, bool $raw_output= false  ] )
 * Description: Calculate the md5 hash of a string
 * Source code: ext/standard/md5.c
*/

echo "*** Testing md5() : error conditions ***\n";

echo "\n-- Testing md5() function with no arguments --\n";
var_dump( md5());

?>
===DONE==
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function md5(): 1 required, 0 provided in %s on line %d
 -- compile-error
