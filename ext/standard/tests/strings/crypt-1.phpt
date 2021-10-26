--TEST--
crypt() function
--SKIPIF--
<?php
if (!function_exists('crypt')) {
	die("SKIP crypt() is not available");
}
?>
--FILE--
<?php

var_dump(crypt());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function crypt(): 1 required, 0 provided in %s on line %d
 -- compile-error
