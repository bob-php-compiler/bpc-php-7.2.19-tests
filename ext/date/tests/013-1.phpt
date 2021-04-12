--TEST--
date_date_set() tests
--FILE--
<?php
date_default_timezone_set('UTC');

$dto = date_create("2006-12-12");
var_dump($dto);
var_dump($dto->format("Y.m.d H:i:s"));
var_dump(date_date_set());
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function date_date_set(): 4 required, 0 provided in %s on line %d
 -- compile-error
