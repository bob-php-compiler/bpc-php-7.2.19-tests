--TEST--
nullable typehint - array
--FILE--
<?php

function test(?array $arg)
{
    var_dump($arg);
}

function test2(?array $arg = array())
{
    var_dump($arg);
}

function test3(?array ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test(array(1,2,3));

echo "---test2---\n";
test2();
test2(null);
test2(array(1,2,3));

echo "---test2---\n";
test3(null, null, null);
test3(array(1,2,3), null, array(4,5,6));
?>
--EXPECT--
---test---
NULL
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
---test2---
array(0) {
}
NULL
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
---test2---
array(3) {
  [0]=>
  NULL
  [1]=>
  NULL
  [2]=>
  NULL
}
array(3) {
  [0]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
  [1]=>
  NULL
  [2]=>
  array(3) {
    [0]=>
    int(4)
    [1]=>
    int(5)
    [2]=>
    int(6)
  }
}
