--TEST--
Test function_exists() function : error conditions
--FILE--
<?php

var_dump(function_exists());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function function_exists(): 1 required, 0 provided in %s on line %d
 -- compile-error
