--TEST--
Test ArrayObject::uksort() function : wrong arg count
--FILE--
<?php
/* Prototype  : int ArrayObject::uksort(callback cmp_function)
 * Description: proto int ArrayIterator::uksort(callback cmp_function)
 Sort the entries by key using user defined function.
 * Source code: ext/spl/spl_array.c
 * Alias to functions:
 */

$ao = new ArrayObject();

try {
	$ao->uksort();
} catch (ArgumentCountError $e) {
	echo $e->getMessage() . "\n";
}

try {
	$ao->uksort(1,2);
} catch (BadMethodCallException $e) {
	echo $e->getMessage() . "\n";
}
?>
===DONE===
--EXPECTF--
Too few arguments to method ArrayObject::uksort(): 1 required, 0 provided

Warning: Too many arguments to method ArrayObject::uksort(): 1 at most, 2 provided in %s on line %d

Warning: uksort() expects parameter 2 to be callable, 1 given in %s on line %d
===DONE===
