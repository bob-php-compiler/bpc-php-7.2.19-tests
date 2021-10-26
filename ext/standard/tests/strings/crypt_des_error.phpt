--TEST--
crypt(): *0 should return *1
--SKIPIF--
<?php
if (!function_exists('crypt')) {
	die("SKIP crypt() is not available");
}
?>
--FILE--
<?php

var_dump(crypt('foo', '*0'));

?>
--EXPECTF--
Warning: crypt(): salt '*0' has the wrong format in %s on line %d
string(2) "*1"
