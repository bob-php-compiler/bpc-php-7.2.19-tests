--TEST--
Test bitwise AND, OR, XOR, NOT and logical NOT in INI via error_reporting
--INI--
error_reporting = 10248
--FILE--
<?php
// E_ALL & E_NOTICE | E_STRICT ^ E_DEPRECATED & ~E_WARNING | !E_ERROR = 10248
echo ini_get('error_reporting');
?>
--EXPECT--
10248
