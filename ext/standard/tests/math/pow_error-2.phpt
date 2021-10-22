--TEST--
Test pow() - wrong params test pow()
--INI--
precision=14
--FILE--
<?php
pow(36,4,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function pow(): 2 at most, 3 provided in %s line 2
 -- compile-error
