--TEST--
Test iconv_strlen() function : error conditions - pass incorrect number of args
--FILE--
<?php

echo "\n-- Testing iconv_strlen() function with more than expected no. of arguments --\n";
$str = 'string_val';
$encoding = 'string_val';
$extra_arg = 10;
var_dump( iconv_strlen($str, $encoding, $extra_arg) );
?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iconv_strlen(): 2 at most, 3 provided in %s on line %d
 -- compile-error
