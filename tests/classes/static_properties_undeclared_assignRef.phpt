--TEST--
Assigning a non-existent static property by reference
--FILE--
<?php
Class C {}
$a = 'foo';
C::$p =& $a;
?>
--EXPECTF--
Parse error: bpc not support CLASS::$static_property = &$var in %s on line %d
