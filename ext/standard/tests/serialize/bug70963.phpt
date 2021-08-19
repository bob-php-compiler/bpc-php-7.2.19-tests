--TEST--
Bug #70963 (Unserialize shows UNKNOW in result)
--FILE--
<?php
var_dump(unserialize('a:2:{i:0;O:9:"exception":1:{s:16:"'."\0".'Exception'."\0".'trace";s:4:"test";}i:1;R:3;}'));
var_dump(unserialize('a:2:{i:0;O:9:"exception":1:{s:16:"'."\0".'Exception'."\0".'trace";s:4:"test";}i:1;r:3;}'));
?>
--EXPECTF--
Fatal error: Exception::trace should be an array, string given in %s on line %d
