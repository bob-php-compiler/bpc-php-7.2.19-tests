--TEST--
get_object_vars() no-declared/declared discrepancies
--SKIPIF--
skip TODO ArrayObject
--FILE--
<?php

class Test {
    public $prop;
}

// Using ArrayObject here to get around property name restrictions

$obj = new stdClass;
$ao = new ArrayObject($obj);
$ao["\0A\0b"] = 42;
$ao["\0*\0b"] = 24;
$ao[12] = 6;
var_dump(get_object_vars($obj));

$obj = new Test;
$ao = new ArrayObject($obj);
$ao["\0A\0b"] = 42;
$ao["\0*\0b"] = 24;
$ao[12] = 6;
var_dump(get_object_vars($obj));

?>
--EXPECT--
array(3) {
  [" A b"]=>
  int(42)
  [" * b"]=>
  int(24)
  [12]=>
  int(6)
}
array(4) {
  ["prop"]=>
  NULL
  [" A b"]=>
  int(42)
  [" * b"]=>
  int(24)
  [12]=>
  int(6)
}
