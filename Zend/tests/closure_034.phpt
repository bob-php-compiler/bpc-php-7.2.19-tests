--TEST--
Closure 033: Recursive var_dump on closures
--SKIPIF--
skip closure no use
--FILE--
<?php

$a = function () use(&$a) {};
var_dump($a);

?>
===DONE===
--EXPECTF--
object(Closure)#%d (1) {
  ["static"]=>
  array(1) {
    ["a"]=>
    *RECURSION*
  }
}
===DONE===
