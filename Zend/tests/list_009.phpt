--TEST--
list with by-reference assignment should fail
--SKIPIF--
skip not support nested list and `[]` list
--FILE--
<?php

$a = [1];
[&$foo] = $a;
$foo = 2;

var_dump($a);

?>
--EXPECTF--
Fatal error: [] and list() assignments cannot be by reference in %s on line %d
