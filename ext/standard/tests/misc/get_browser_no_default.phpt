--TEST--
get_browser() without a default
--INI--
browscap={PWD}/browscap_no_default.ini
--SKIPIF--
skip functions not implemented
--FILE--
<?php

var_dump(get_browser(""));

?>
--EXPECT--
bool(false)
