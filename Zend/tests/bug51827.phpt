--TEST--
Bug #51827 (Bad warning when register_shutdown_function called with wrong num of parameters)
--FILE--
<?php


function abc() {
	var_dump(1);
}

register_shutdown_function('timE');
register_shutdown_function('ABC');
register_shutdown_function('exploDe');

?>
--EXPECTF--
int(1)

Fatal error: Uncaught ArgumentCountError: Too few arguments to function exploDe(): 2 required, 0 provided in %sbug51827.php:10
Stack trace:
#0 {main}
  thrown in %sbug51827.php on line 10
