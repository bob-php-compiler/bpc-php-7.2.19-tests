--TEST--
Bug #75290 (debug info of Closures of internal functions contain garbage argument names)
--SKIPIF--
skip not support Reflection
--FILE--
<?php

var_dump((new ReflectionFunction('sin'))->getClosure());

var_dump(function ($someThing) {});

?>
--EXPECT--
object(Closure)#2 (1) {
  ["parameter"]=>
  array(1) {
    ["$number"]=>
    string(10) "<required>"
  }
}
object(Closure)#2 (1) {
  ["parameter"]=>
  array(1) {
    ["$someThing"]=>
    string(10) "<required>"
  }
}
