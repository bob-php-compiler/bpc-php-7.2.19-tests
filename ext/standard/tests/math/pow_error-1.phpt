--TEST--
Test pow() - wrong params test pow()
--INI--
precision=14
--FILE--
<?php
pow(36);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function pow(): 2 required, 1 provided in %s line 2
 -- compile-error
