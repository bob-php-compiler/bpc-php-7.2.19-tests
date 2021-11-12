--TEST--
touch() error tests
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php

var_dump(touch());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function touch(): 1 required, 0 provided in %s on line %d
 -- compile-error
