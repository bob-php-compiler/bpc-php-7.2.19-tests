--TEST--
Test addcslashes() function (errors)
--INI--
precision=14
--FILE--
<?php

echo "\n*** Testing error conditions ***\n";
/* zero argument */
var_dump( addcslashes() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function addcslashes(): 2 required, 0 provided in %s on line %d
 -- compile-error
