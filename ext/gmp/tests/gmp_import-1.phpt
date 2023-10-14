--TEST--
gmp_import() basic tests
--FILE--
<?php

// Invalid arguments (zpp failure)
var_dump(gmp_import());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_import(): 1 required, 0 provided in %s on line %d
 -- compile-error
