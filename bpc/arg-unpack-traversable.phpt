--TEST--
arg unpack traversable
--FILE--
<?php

function gen()
{
    yield 1;
    yield 2;
}

function test(...$args) {
    var_dump($args);
}

echo "==Iterator==\n";
test(...new ArrayIterator(array(1,2)));

echo "==IteratorAggregate==\n";
test(...new ArrayObject(array(1,2)));

echo "==gen==\n";
test(...gen());

?>
--EXPECT--
==Iterator==
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
==IteratorAggregate==
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
==gen==
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(2)
}
