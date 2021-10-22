--TEST--
Test log() - wrong params test log()
--INI--
precision=14
--FILE--
<?php
log();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function log(): 1 required, 0 provided in %s on line %d
 -- compile-error
