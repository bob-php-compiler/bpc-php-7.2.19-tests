--TEST--
date_isodate_set() tests
--FILE--
<?php
var_dump(date_isodate_set($dto, 2006));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_isodate_set(): 3 required, 2 provided in %s on line %d
 -- compile-error
