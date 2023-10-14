--TEST--
gmp_export() basic tests
--FILE--
<?php

// Invalid arguments (zpp failure)
var_dump(gmp_export());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gmp_export(): 1 required, 0 provided in %s on line %d
 -- compile-error
