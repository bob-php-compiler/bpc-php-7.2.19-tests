--TEST--
array_search() tests
--FILE--
<?php

var_dump(array_search(1));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function array_search(): 2 required, 1 provided in %s on line %d
 -- compile-error
