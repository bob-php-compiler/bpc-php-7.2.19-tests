--TEST--
ini_set() function
--SKIPIF--
skip no ini arg_separator
--INI--
arg_separator.output=&
--FILE--
<?php
var_dump(ini_set("arg_separator.output", ""));
var_dump(ini_get("arg_separator.output"));
?>
--EXPECTF--
bool(false)
string(1) "&"
