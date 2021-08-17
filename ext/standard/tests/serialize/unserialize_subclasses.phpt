--TEST--
Test unserialize() with allowed_classes and subclasses
--FILE--
<?php

class C {}
class D extends C {}

$c = serialize(new C);
$d = serialize(new D);

var_dump(unserialize($c, array("allowed_classes" => array("C"))));
var_dump(unserialize($c, array("allowed_classes" => array("D"))));
var_dump(unserialize($d, array("allowed_classes" => array("C"))));
var_dump(unserialize($d, array("allowed_classes" => array("D"))));
--EXPECTF--
object(C)#%d (0) {
}
object(__PHP_Incomplete_Class)#%d (1) {
  ["__PHP_Incomplete_Class_Name"]=>
  string(1) "C"
}
object(__PHP_Incomplete_Class)#%d (1) {
  ["__PHP_Incomplete_Class_Name"]=>
  string(1) "D"
}
object(D)#%d (0) {
}
