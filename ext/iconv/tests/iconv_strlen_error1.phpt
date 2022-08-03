--TEST--
Test iconv_strlen() function : error conditions - pass incorrect number of args
--FILE--
<?php

echo "\n-- Testing iconv_strlen() function with Zero arguments --\n";
var_dump( iconv_strlen() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function iconv_strlen(): 1 required, 0 provided in %s on line %d
 -- compile-error
