--TEST--
preg_replace_callback_array() errors
--FILE--
<?php

var_dump(preg_replace_callback_array(1));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function preg_replace_callback_array(): 2 required, 1 provided in %s on line %d
 -- compile-error
