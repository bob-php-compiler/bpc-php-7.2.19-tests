--TEST--
array_diff with ref element
--FILE--
<?php

$v = 1;
$arr = array(&$v, 2, 3);
$diff = array_diff($arr, array(3));
var_dump($diff);
$v = 'v';
var_dump($diff);

?>
--EXPECT--
array(2) {
  [0]=>
  &int(1)
  [1]=>
  int(2)
}
array(2) {
  [0]=>
  &string(1) "v"
  [1]=>
  int(2)
}
