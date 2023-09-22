--TEST--
nullable typehint - callable
--FILE--
<?php

function test(?callable $arg)
{
    var_dump($arg);
}

function test2(?callable $arg = null)
{
    var_dump($arg);
}

function test3(?callable ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test('strlen');

echo "---test2---\n";
test2();
test2(null);
test2('strlen');

echo "---test2---\n";
test3(null, null, null);
test3('strlen', null, 'substr');
?>
--EXPECT--
---test---
NULL
string(6) "strlen"
---test2---
NULL
NULL
string(6) "strlen"
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
  string(6) "strlen"
  [1]=>
  NULL
  [2]=>
  string(6) "substr"
}
