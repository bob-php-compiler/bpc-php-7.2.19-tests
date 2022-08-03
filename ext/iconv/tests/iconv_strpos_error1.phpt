--TEST--
Test iconv_strpos() function : error conditions - Pass incorrect number of args
--FILE--
<?php

echo "\n-- Testing iconv_strpos() function with more than expected no. of arguments --\n";
$haystack = 'string_val';
$needle = 'string_val';
$offset = 10;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( iconv_strpos($haystack, $needle, $offset, $encoding, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iconv_strpos(): 4 at most, 5 provided in %s on line %d
 -- compile-error
