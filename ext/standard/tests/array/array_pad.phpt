--TEST--
array_pad() tests
--FILE--
<?php

var_dump(array_pad(array(), 1, 0));

var_dump(array_pad(array(), 0, 0));
var_dump(array_pad(array(), -1, 0));
var_dump(array_pad(array("", -1, 2.0), 5, 0));
var_dump(array_pad(array("", -1, 2.0), 5, array()));
var_dump(array_pad(array("", -1, 2.0), 2, array()));
var_dump(array_pad(array("", -1, 2.0), -3, array()));
var_dump(array_pad(array("", -1, 2.0), -4, array()));
var_dump(array_pad(array("", -1, 2.0), 2000000, 0));
var_dump(array_pad("", 2000000, 0));

echo "Done\n";
?>
--EXPECTF--
array(1) {
  [0]=>
  int(0)
}
array(0) {
}
array(1) {
  [0]=>
  int(0)
}
array(5) {
  [0]=>
  string(0) ""
  [1]=>
  int(-1)
  [2]=>
  float(2)
  [3]=>
  int(0)
  [4]=>
  int(0)
}
array(5) {
  [0]=>
  string(0) ""
  [1]=>
  int(-1)
  [2]=>
  float(2)
  [3]=>
  array(0) {
  }
  [4]=>
  array(0) {
  }
}
array(3) {
  [0]=>
  string(0) ""
  [1]=>
  int(-1)
  [2]=>
  float(2)
}
array(3) {
  [0]=>
  string(0) ""
  [1]=>
  int(-1)
  [2]=>
  float(2)
}
array(4) {
  [0]=>
  array(0) {
  }
  [1]=>
  string(0) ""
  [2]=>
  int(-1)
  [3]=>
  float(2)
}

Warning: array_pad(): You may only pad up to 1048576 elements at a time in %s on line %d
bool(false)

Warning: array_pad() expects parameter 1 to be array, string given in %s on line %d
NULL
Done
