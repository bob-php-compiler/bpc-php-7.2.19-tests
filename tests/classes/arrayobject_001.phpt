--TEST--
Ensure that ArrayObject acts like an array
--SKIPIF--
skip TODO ArrayObject
--FILE--
<?php

$a = new ArrayObject;
$a['foo'] = 'bar';
echo reset($a);
echo count($a);
echo current($a);
?>
--EXPECT--
bar1bar
