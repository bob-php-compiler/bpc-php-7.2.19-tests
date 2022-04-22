--TEST--
SPL: spl_object_id()
--FILE--
<?php

var_dump(spl_object_id());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function spl_object_id(): 1 required, 0 provided in %s on line %d
 -- compile-error
