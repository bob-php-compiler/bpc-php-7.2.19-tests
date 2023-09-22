--TEST--
nullable typehint - string
--FILE--
<?php

function test(?string $arg)
{
    var_dump($arg);
}

function test2(?string $arg = 'Bob')
{
    var_dump($arg);
}

function test3(?string ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test('Joe');

echo "---test2---\n";
test2();
test2(null);
test2('Joe');

echo "---test2---\n";
test3(null, null, null);
test3('Bob', null, 'Joe');
?>
--EXPECT--
---test---
NULL
string(3) "Joe"
---test2---
string(3) "Bob"
NULL
string(3) "Joe"
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
  string(3) "Bob"
  [1]=>
  NULL
  [2]=>
  string(3) "Joe"
}
