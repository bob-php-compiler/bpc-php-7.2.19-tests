--TEST--
Multiple declarations of the same static variable
--FILE--
<?php

$a = 5;

var_dump($a);

function foo() {
	static $a = 13;
	static $a = 14;

	var_dump($a);
}

foo();

?>
--EXPECT--
int(5)
int(14)
