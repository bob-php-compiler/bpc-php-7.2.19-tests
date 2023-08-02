--TEST--
Unpack arguments for dynamic call
--FILE--
<?php

$fn = function(...$args) {
    var_dump($args);
};

$fn(...array());
$fn(...array(1, 2, 3));
$fn(1, ...array(2, 3), ...array(), ...array(4, 5));

?>
--EXPECT--
array(0) {
}
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
array(5) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
  [3]=>
  int(4)
  [4]=>
  int(5)
}
