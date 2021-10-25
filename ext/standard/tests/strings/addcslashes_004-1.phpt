--TEST--
Test addcslashes() function (errors)
--INI--
precision=14
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

var_dump( addcslashes("foo[]") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function addcslashes(): 2 required, 1 provided in %s on line %d
 -- compile-error
