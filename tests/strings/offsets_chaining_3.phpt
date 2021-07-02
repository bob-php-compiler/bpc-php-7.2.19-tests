--TEST--
testing the behavior of string offset chaining
--INI--
error_reporting=32767
--FILE--
<?php
// E_ALL | E_DEPRECATED = 32767
$string = "foobar";
var_dump(isset($string[0][0][0][0]));
?>
--EXPECTF--
bool(true)
