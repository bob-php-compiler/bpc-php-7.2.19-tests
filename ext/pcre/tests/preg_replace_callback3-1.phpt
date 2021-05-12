--TEST--
preg_replace_callback() 3
--FILE--
<?php

var_dump(preg_replace_callback());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function preg_replace_callback(): 3 required, 0 provided in %s on line %d
 -- compile-error
