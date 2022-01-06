--TEST--
json_last_error_msg() failures
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php

var_dump(json_last_error_msg());

?>
--EXPECTF--
string(8) "No error"
