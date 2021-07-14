--TEST--
Ensure correct unmangling of private property names for anonymous class instances
--SKIPIF--
skip not support anonymous class
--FILE--
<?php
var_dump(new class { private $foo; });
?>
--EXPECT--
object(class@anonymous)#1 (1) {
  ["foo":"class@anonymous":private]=>
  NULL
}
