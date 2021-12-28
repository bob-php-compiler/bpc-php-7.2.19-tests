--TEST--
Test ob_get_length() function : basic functionality
--INI--
output_buffering=0
--FILE--
<?php

// Extra argument
var_dump( ob_get_length( 'foobar' ) );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function ob_get_length(): 0 at most, 1 provided in %s on line %d
 -- compile-error
