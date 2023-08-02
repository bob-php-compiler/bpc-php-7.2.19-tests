--TEST--
Basic argument unpacking
--FILE--
<?php

function test(...$args) {
    var_dump($args);
}

function test2($arg1, $arg2, $arg3 = null) {
    var_dump($arg1, $arg2, $arg3);
}

function getArray($array) {
    return $array;
}
/*
function arrayGen($array) {
    foreach ($array as $element) {
        yield $element;
    }
}
*/
$array = array(1, 2, 3);

test(...array());
test(...array(1, 2, 3));
test(...$array);
test(...getArray(array(1, 2, 3)));
//test(...arrayGen(array()));
//test(...arrayGen(array(1, 2, 3)));

test(1, ...array(2, 3), ...array(4, 5));
test(1, ...getArray(array(2, 3))/*, ...arrayGen(array(4, 5))*/);

test2(...array(1, 2));
test2(...array(1, 2, 3));
test2(...array(1), ...array(), ...array(), ...array(2, 3), ...array(4, 5));

?>
--EXPECTF--
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
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
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
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
int(1)
int(2)
NULL
int(1)
int(2)
int(3)

Warning: Too many arguments to function %s: 3 at most, 5 provided in %s on line %d
int(1)
int(2)
int(3)
