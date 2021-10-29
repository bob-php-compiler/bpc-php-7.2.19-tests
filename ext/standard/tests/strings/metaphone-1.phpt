--TEST--
metaphone() tests
--FILE--
<?php

var_dump(metaphone());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function metaphone(): 1 required, 0 provided in %s on line %d
 -- compile-error
