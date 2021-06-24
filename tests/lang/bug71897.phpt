--TEST--
Bug #71897 (ASCII 0x7F Delete control character permitted in identifiers)
--FILE--
<?php

$ab = 3;
var_dump($ab)

?>
--EXPECTF--
Parse error: syntax error, unexpected '' in %s on line %d
