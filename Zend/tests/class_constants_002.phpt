--TEST--
class constants as default function arguments
--FILE--
<?php

class test {
	const val = 1;
}

function foo($v = test::val) {
	var_dump($v);
}

foo();
foo(5);

?>
--EXPECTF--
int(1)
int(5)
