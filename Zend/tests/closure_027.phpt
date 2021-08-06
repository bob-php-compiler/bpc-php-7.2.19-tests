--TEST--
Closure 027: Testing Closure type-hint
--FILE--
<?php

function test(closure $a) {
	var_dump($a());
}


test(function() { return new stdclass; });

test(function() { });

$a = function($x) {};
try {
	test($a);
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

test(new stdclass);

?>
--EXPECTF--
object(stdClass)#%d (0) {
}
NULL
Exception: Too few arguments to function {closure}(): 1 required, 0 provided

Fatal error: Uncaught TypeError: Argument 1 passed to test() must be an instance of Closure, instance of stdClass given, called in %s on line %d and defined in %s:%d
Stack trace:
#0 %s(%d): test(Object(stdClass))
#1 {main}
  thrown in %s on line %d
