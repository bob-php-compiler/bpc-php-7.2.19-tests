--TEST--
strncmp() tests
--FILE--
<?php

var_dump(strncmp("", ""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function strncmp(): 3 required, 2 provided in %s on line %d
 -- compile-error
