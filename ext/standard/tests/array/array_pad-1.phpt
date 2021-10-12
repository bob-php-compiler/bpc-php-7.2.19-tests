--TEST--
array_pad() tests
--FILE--
<?php

var_dump(array_pad());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_pad(): 3 required, 0 provided in %s on line %d
 -- compile-error
