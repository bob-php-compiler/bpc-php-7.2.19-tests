--TEST--
Test array_keys() function (error conditions)
--FILE--
<?php

echo "\n*** Testing error conditions ***";
var_dump(array_keys(100));
var_dump(array_keys("string"));
var_dump(array_keys(new stdclass));  // object
var_dump(array_keys(array(1,2,3, new stdClass => array())));  // (W)illegal offset

echo "Done\n";
?>
--EXPECTF--
*** Testing error conditions ***
Warning: array_keys() expects parameter 1 to be array, integer given in %s on line %d
NULL

Warning: array_keys() expects parameter 1 to be array, string given in %s on line %d
NULL

Warning: array_keys() expects parameter 1 to be array, object given in %s on line %d
NULL

Warning: Illegal offset type in %s on line %d
array(3) {
  [0]=>
  int(0)
  [1]=>
  int(1)
  [2]=>
  int(2)
}
Done
