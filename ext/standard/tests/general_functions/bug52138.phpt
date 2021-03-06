--TEST--
Bug #52138 (Constants are parsed into the ini file for section names)
--FILE--
<?php

define('MYCONST', 1);
define('A', 'B');

$ini_file = "bug52138.data";

$ret = parse_ini_file($ini_file, true);
var_dump($ret);

?>
--EXPECTF--
array(4) {
  ["MYCONST"]=>
  array(1) {
    ["MYCONST"]=>
    string(1) "1"
  }
  ["M_PI"]=>
  array(1) {
    ["FOO"]=>
    string(12) "M_PI " test""
  }
  ["foo::bar"]=>
  array(2) {
    ["A"]=>
    string(1) "1"
    ["B"]=>
    string(7) "A "A" A"
  }
  ["MYCONST M_PI"]=>
  array(0) {
  }
}
