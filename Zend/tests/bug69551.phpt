--TEST--
Bug #69551 - parse_ini_file() and parse_ini_string() segmentation fault
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
array(1) {
  ["SubnetMask"]=>
  string(1) "
"
}
