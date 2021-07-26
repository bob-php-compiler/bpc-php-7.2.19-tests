--TEST--
Bug #31720 (Invalid object callbacks not caught in array_walk())
--FILE--
<?php
$array = array('at least one element');

array_walk($array, array($nonesuchvar,'show'));
?>
===DONE===
--EXPECTF--
Warning: array_walk() expects parameter 2 to be callable, Array given in %s on line %d
===DONE===
