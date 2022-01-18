--TEST--
Test finfo_set_flags() function : basic functionality
--FILE--
<?php

var_dump( finfo_set_flags() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function finfo_set_flags(): 2 required, 0 provided in %s on line %d
 -- compile-error
