--TEST--
Test iconv_strpos() function : error conditions - Pass incorrect number of args
--FILE--
<?php

echo "\n-- Testing iconv_strpos() function with less than expected no. of arguments --\n";
$haystack = 'string_val';
var_dump( iconv_strpos($haystack) );

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iconv_strpos(): 2 required, 1 provided in %s on line %d
 -- compile-error
