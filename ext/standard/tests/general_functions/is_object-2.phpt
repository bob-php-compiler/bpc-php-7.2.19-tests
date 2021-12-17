--TEST--
Test is_object() function
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

//arguments more than expected
var_dump( is_object($myClass_object, $myClass_object) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function is_object(): 1 at most, 2 provided in %s on line %d
 -- compile-error
