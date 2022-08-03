--TEST--
Test iconv_substr() function : error conditions - Pass incorrect number of args
--FILE--
<?php

echo "\n-- Testing iconv_substr() function with less than expected no. of arguments --\n";
$str = 'string_val';
var_dump( iconv_substr($str) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iconv_substr(): 2 required, 1 provided in %s on line %d
 -- compile-error
