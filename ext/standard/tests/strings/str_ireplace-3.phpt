--TEST--
str_ireplace() tests
--FILE--
<?php

var_dump(str_ireplace("", ""));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_ireplace(): 3 required, 2 provided in %s on line %d
 -- compile-error
