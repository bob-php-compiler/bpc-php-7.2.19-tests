--TEST--
nullable typehint - float
--FILE--
<?php

function test(?float $arg)
{
    var_dump($arg);
}

function test2(?float $arg = 100.1)
{
    var_dump($arg);
}

function test3(?float ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test(100.1);

echo "---test2---\n";
test2();
test2(null);
test2(100.1);

echo "---test2---\n";
test3(null, null, null);
test3(100.1, null, 200.1);
?>
--EXPECT--
---test---
NULL
float(100.1)
---test2---
float(100.1)
NULL
float(100.1)
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
  float(100.1)
  [1]=>
  NULL
  [2]=>
  float(200.1)
}
