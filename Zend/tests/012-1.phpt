--TEST--
class_exists() tests
--FILE--
<?php

var_dump(class_exists());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function class_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
