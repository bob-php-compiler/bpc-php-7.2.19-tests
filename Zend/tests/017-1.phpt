--TEST--
builtin functions tests
--FILE--
<?php

var_dump(get_resource_type());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_resource_type(): 1 required, 0 provided in %s on line %d
 -- compile-error
