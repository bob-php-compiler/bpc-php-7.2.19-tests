--TEST--
Bug #69551 - parse_ini_file() and parse_ini_string() segmentation fault
--SKIPIF--
skip TODO parse_ini_string()
--FILE--
<?php
$ini = <<<INI
[Network.eth0]
SubnetMask = "
"
INI;
$settings = parse_ini_string($ini, false, INI_SCANNER_RAW);
var_dump($settings);
?>
--EXPECTF--
Warning: syntax error, unexpected '"' in Unknown on line %d
 in %s on line %d
bool(false)
