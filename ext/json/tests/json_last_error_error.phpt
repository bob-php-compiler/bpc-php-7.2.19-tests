--TEST--
json_last_error() failures
--SKIPIF--
<?php if (!extension_loaded("json")) print "skip"; ?>
--FILE--
<?php

var_dump(json_last_error());

?>
--EXPECTF--
int(0)
