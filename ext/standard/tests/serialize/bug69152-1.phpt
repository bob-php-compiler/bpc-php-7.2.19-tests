--TEST--
Bug #69152: Type Confusion Infoleak Vulnerability in unserialize()
--FILE--
<?php
$x = unserialize('O:9:"exception":1:{s:16:"'."\0".'Exception'."\0".'trace";s:4:"ryat";}');
echo $x;

?>
--EXPECTF--
Fatal error: Exception::trace should be an array, string given in %s on line %d
