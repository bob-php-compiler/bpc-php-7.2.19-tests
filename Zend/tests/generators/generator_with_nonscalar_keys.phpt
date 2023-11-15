--TEST--
Generators can return non-scalar keys
--FILE--
<?php

function gen() {
    yield array(1, 2, 3) => array(4, 5, 6);
    yield (object) array('a' => 'b') => (object) array('b' => 'a');
    yield 3.14 => 2.73;
    yield false => true;
    yield true => false;
    yield null => null;
}

foreach (gen() as $k => $v) {
    var_dump($k, $v);
}

?>
--EXPECTF--
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
  int(4)
  [1]=>
  int(5)
  [2]=>
  int(6)
}
object(stdClass)#%d (1) {
  ["a"]=>
  string(1) "b"
}
object(stdClass)#%d (1) {
  ["b"]=>
  string(1) "a"
}
float(3.14)
float(2.73)
bool(false)
bool(true)
bool(true)
bool(false)
NULL
NULL
