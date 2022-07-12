--TEST--
hash_copy() errors
--FILE--
<?php

$r = hash_init("md5");
var_dump(hash_copy($r, $r));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function hash_copy(): 1 at most, 2 provided in %s on line %d
 -- compile-error
