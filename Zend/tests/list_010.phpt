--TEST--
Do not allow mixing [] and list()
--SKIPIF--
skip not support nested list and `[]` list
--FILE--
<?php

list([$a]) = [[1]];
var_dump($a);

?>
--EXPECTF--
Fatal error: Cannot mix [] and list() in %s on line %d
