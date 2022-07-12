--TEST--
hash_copy() errors
--FILE--
<?php

var_dump(hash_copy());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function hash_copy(): 1 required, 0 provided in %s on line %d
 -- compile-error
