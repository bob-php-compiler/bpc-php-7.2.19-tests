--TEST--
nullable typehint - int
--FILE--
<?php

function test(?int $arg)
{
    var_dump($arg);
}

function test2(?int $arg = 100)
{
    var_dump($arg);
}

function test3(?int ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test(100);

echo "---test2---\n";
test2();
test2(null);
test2(100);

echo "---test2---\n";
test3(null, null, null);
test3(100, null, 200);
?>
--EXPECT--
---test---
NULL
int(100)
---test2---
int(100)
NULL
int(100)
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
  int(100)
  [1]=>
  NULL
  [2]=>
  int(200)
}
