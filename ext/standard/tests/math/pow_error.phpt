--TEST--
Test pow() - wrong params test pow()
--INI--
precision=14
--FILE--
<?php
pow();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pow(): 2 required, 0 provided in %s line 2
 -- compile-error
