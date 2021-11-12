--TEST--
touch() error tests
--CREDITS--
Dave Kelsey <d_kelsey@uk.ibm.com>
--FILE--
<?php

var_dump(touch(1, 2, 3, 4));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function touch(): 3 at most, 4 provided in %s on line %d
 -- compile-error
