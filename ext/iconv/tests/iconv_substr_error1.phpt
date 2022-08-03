--TEST--
Test iconv_substr() function : error conditions - Pass incorrect number of args
--FILE--
<?php
echo "\n-- Testing iconv_substr() function with more than expected no. of arguments --\n";
$str = 'string_val';
$start = 10;
$length = 10;
$encoding = 'string_val';
$extra_arg = 10;
var_dump( iconv_substr($str, $start, $length, $encoding, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iconv_substr(): 4 at most, 5 provided in %s on line %d
 -- compile-error
