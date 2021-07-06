--TEST--
builtin functions tests
--FILE--
<?php

var_dump(get_extension_funcs());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function get_extension_funcs(): 1 required, 0 provided in %s on line %d
 -- compile-error
