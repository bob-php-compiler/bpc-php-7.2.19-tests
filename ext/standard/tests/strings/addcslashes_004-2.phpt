--TEST--
Test addcslashes() function (errors)
--INI--
precision=14
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";

var_dump( addcslashes('foo[]', "o", "foo") );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function addcslashes(): 2 at most, 3 provided in %s on line %d
 -- compile-error
