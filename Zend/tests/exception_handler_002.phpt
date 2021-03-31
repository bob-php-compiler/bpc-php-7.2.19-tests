--TEST--
exception handler tests - 2
--FILE--
<?php

set_exception_handler("foo");

function foo($e) {
	var_dump(get_class($e)." thrown!");
	throw new Exception();
}

class test extends Exception {
}

throw new test();

echo "Done\n";
?>
--EXPECTF--
string(12) "test thrown!"

Fatal error: Uncaught Exception in %sexception_handler_002.php:7
Stack trace:
#0 %sexception_handler_002.php(13): foo(Object(test))
#1 {main}
  thrown in %sexception_handler_002.php on line %d
