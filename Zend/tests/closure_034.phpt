--TEST--
Closure 033: Recursive var_dump on closures
--FILE--
<?php

$a = function () use(&$a) {};
var_dump($a);

?>
===DONE===
--EXPECTF--
object(Closure)#%d (0) {
}
===DONE===
