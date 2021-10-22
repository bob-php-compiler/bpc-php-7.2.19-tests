--TEST--
Test log() - wrong params test log()
--INI--
precision=14
--FILE--
<?php
log(36,4,true);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function log(): 2 at most, 3 provided in %s on line %d
 -- compile-error
