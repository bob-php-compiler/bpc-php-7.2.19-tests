--TEST--
gmp_rootrem() basic tests
--FILE--
<?php

var_dump(gmp_rootrem());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_rootrem(): 2 required, 0 provided in %s on line %d
 -- compile-error
