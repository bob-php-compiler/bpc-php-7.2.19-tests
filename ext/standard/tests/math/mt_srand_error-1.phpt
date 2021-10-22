--TEST--
Test mt_srand() - wrong params test mt_srand()
--FILE--
<?php
var_dump(mt_srand(500, 0, true));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function mt_srand(): 2 at most, 3 provided in %s on line 2
 -- compile-error
