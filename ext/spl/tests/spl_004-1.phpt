--TEST--
SPL: iterator_apply()
--FILE--
<?php

var_dump(iterator_apply(new ArrayIterator(), 'non_existing_function', NULL, 2));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function iterator_apply(): 3 at most, 4 provided in %s on line %d
 -- compile-error
