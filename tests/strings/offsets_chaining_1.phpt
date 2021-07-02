--TEST--
testing the behavior of string offset chaining
--INI--
error_reporting=32767
--FILE--
<?php
// E_ALL | E_DEPRECATED = 32767
$string = "foobar";
var_dump($string[0][0][0][0]);
?>
--EXPECTF--
string(1) "f"
