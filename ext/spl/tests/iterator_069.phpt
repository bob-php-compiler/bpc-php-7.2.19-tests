--TEST--
SPL: RecursiveIteratorIterator cannot be used with foreach by reference
--SKIPIF--
skip not support foreach as reference
--FILE--
<?php

$arr = array(array(1,2));
$arrOb = new ArrayObject($arr);

$recArrIt = new RecursiveArrayIterator($arrOb->getIterator());

$recItIt = new RecursiveIteratorIterator($recArrIt);

foreach ($recItIt as &$val) echo "$val\n";

?>
--EXPECTF--
Fatal error: An iterator cannot be used with foreach by reference in %s on line %d
