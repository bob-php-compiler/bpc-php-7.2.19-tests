--TEST--
timezone_name_from_abbr() tests
--FILE--
<?php
date_default_timezone_set('UTC');

var_dump(timezone_name_from_abbr());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function timezone_name_from_abbr(): 1 required, 0 provided in %s on line %d
 -- compile-error
