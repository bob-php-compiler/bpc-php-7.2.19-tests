--TEST--
date_isodate_set() tests
--FILE--
<?php
var_dump(date_isodate_set($dto, 2006, 100, 15, 10));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function date_isodate_set(): 4 at most, 5 provided in %s on line %d
 -- compile-error
