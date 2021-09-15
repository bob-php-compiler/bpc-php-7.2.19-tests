--TEST--
Call userland function with incorrect number of arguments
--ARGS--
--bpc-include-file Zend/tests/function_arguments/argument_count_incorrect_userland.inc
--FILE--
<?php

include "argument_count_incorrect_userland.inc";

try {
	foo();
} catch (Error $e) {
	echo get_class($e) . PHP_EOL;
	echo $e->getMessage() . PHP_EOL;
}

try {
	bar(1);
} catch (Error $e) {
	echo get_class($e) . PHP_EOL;
	echo $e->getMessage() . PHP_EOL;
}

try {
	bat(123);
} catch (Error $e) {
	echo get_class($e) . PHP_EOL;
	echo $e->getMessage() . PHP_EOL;
}

try {
	bat("123");
} catch (Error $e) {
	echo get_class($e) . PHP_EOL;
	echo $e->getMessage() . PHP_EOL;
}
--EXPECTF--
ArgumentCountError
Too few arguments to function foo(): 1 required, 0 provided
ArgumentCountError
Too few arguments to function bar(): 2 required, 1 provided
ArgumentCountError
Too few arguments to function bat(): 2 required, 1 provided
ArgumentCountError
Too few arguments to function bat(): 2 required, 1 provided
