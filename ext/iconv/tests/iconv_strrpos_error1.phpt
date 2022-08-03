--TEST--
Test iconv_strrpos() function : error conditions - pass incorrect number of args
--FILE--
<?php
echo "\n-- Testing iconv_strrpos() function with more than expected no. of arguments --\n";
$haystack = 'string_val';
$needle = 'string_val';
$encoding = 'string_val';
$extra_arg = 10;
var_dump( iconv_strrpos($haystack, $needle, $encoding, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iconv_strrpos(): 3 at most, 4 provided in %s on line %d
 -- compile-error
