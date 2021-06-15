--TEST--
Bug #64523: XOR not parsed in INI
--INI--
error_reporting = 22519
--FILE--
<?php
echo ini_get('error_reporting');
?>
--EXPECTF--
22519
