--TEST--
Bug #74670: Integer Underflow when unserializing GMP and possible other classes
--FILE--
<?php
$str = 'C:3:"GMP":4:{s:6666666666:""}';
var_dump(unserialize($str));
?>
--EXPECTF--
Notice: unserialize(): Error at offset %d of 29 bytes in %s on line %d
bool(false)
