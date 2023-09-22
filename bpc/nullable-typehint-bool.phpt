--TEST--
nullable typehint - bool
--FILE--
<?php

function test(?bool $arg)
{
    var_dump($arg);
}

function test2(?bool $arg = true)
{
    var_dump($arg);
}

function test3(?bool ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test(true);

echo "---test2---\n";
test2();
test2(null);
test2(true);

echo "---test2---\n";
test3(null, null, null);
test3(true, null, false);
?>
--EXPECT--
---test---
NULL
bool(true)
---test2---
bool(true)
NULL
bool(true)
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
  bool(true)
  [1]=>
  NULL
  [2]=>
  bool(false)
}
