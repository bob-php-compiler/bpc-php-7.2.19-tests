--TEST--
Bug #70852 Segfault getting NULL offset of an ArrayObject
--FILE--
<?php
$y = new ArrayObject();

var_dump($y[NULL]);
var_dump($y[NULL]++);
?>
===DONE===
--EXPECTF--
Notice: Undefined index:  in %s on line %d
NULL

Notice: Undefined index:  in %s on line %d

Notice: Indirect modification of overloaded element of ArrayObject has no effect in %s on line %d
NULL
===DONE===
