--TEST--
nullable typehint - class
--FILE--
<?php

class A {}

function test(?A $arg)
{
    var_dump($arg);
}

function test2(?A $arg = null)
{
    var_dump($arg);
}

function test3(?A ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test(new A);

echo "---test2---\n";
test2();
test2(null);
test2(new A);

echo "---test2---\n";
test3(null, null, null);
test3(new A, null, new A);
?>
--EXPECTF--
---test---
NULL
object(A)#%d (0) {
}
---test2---
NULL
NULL
object(A)#%d (0) {
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
  object(A)#%d (0) {
  }
  [1]=>
  NULL
  [2]=>
  object(A)#%d (0) {
  }
}
