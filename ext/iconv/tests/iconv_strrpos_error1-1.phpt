--TEST--
Test iconv_strrpos() function : error conditions - pass incorrect number of args
--FILE--
<?php

echo "\n-- Testing iconv_strrpos() function with less than expected no. of arguments --\n";
$haystack = 'string_val';
var_dump( iconv_strrpos($haystack) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iconv_strrpos(): 2 required, 1 provided in %s on line %d
 -- compile-error
