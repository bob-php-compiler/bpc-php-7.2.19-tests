--TEST--
Buf #67151: strtr with empty array crashes
--FILE--
<?php
var_dump(strtr("foo", array()));
?>
--EXPECT--
string(3) "foo"
