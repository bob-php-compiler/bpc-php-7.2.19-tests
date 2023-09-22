--TEST--
nullable typehint - object
--FILE--
<?php

function test(?object $arg)
{
    var_dump($arg);
}

function test2(?object $arg = null)
{
    var_dump($arg);
}

function test3(?object ...$args)
{
    var_dump($args);
}

echo "---test---\n";
test(null);
test(new stdclass);

echo "---test2---\n";
test2();
test2(null);
test2(new stdclass);

echo "---test2---\n";
test3(null, null, null);
test3(new stdclass, null, new stdclass);
?>
--EXPECTF--
---test---
NULL
object(stdClass)#%d (0) {
}
---test2---
NULL
NULL
object(stdClass)#%d (0) {
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
  object(stdClass)#%d (0) {
  }
  [1]=>
  NULL
  [2]=>
  object(stdClass)#%d (0) {
  }
}
