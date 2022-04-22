--TEST--
SPL: spl_object_hash()
--FILE--
<?php

var_dump(spl_object_hash());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function spl_object_hash(): 1 required, 0 provided in %s on line %d
 -- compile-error
