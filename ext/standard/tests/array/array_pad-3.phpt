--TEST--
array_pad() tests
--FILE--
<?php

var_dump(array_pad(array(), 1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_pad(): 3 required, 2 provided in %s on line %d
 -- compile-error
