--TEST--
preg_replace_callback_array() errors
--FILE--
<?php

var_dump(preg_replace_callback_array());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function preg_replace_callback_array(): 2 required, 0 provided in %s on line %d
 -- compile-error
