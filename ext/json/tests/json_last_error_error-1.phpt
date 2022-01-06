--TEST--
json_last_error() failures
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php

var_dump(json_last_error(true));
var_dump(json_last_error('some', 4, 'args', 'here'));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function json_last_error(): 0 at most, 1 provided in %s on line %d
 -- compile-error
