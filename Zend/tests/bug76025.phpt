--TEST--
Bug #76025 (Segfault while throwing exception in error_handler)
--FILE--
<?php

function handleError($errno, $errstr, $errfile, $errline) {
	$exception = new exception("blah");
	throw $exception;
}
set_error_handler('handleError');
$b = array();
$c = $b[$a];
?>
--EXPECTF--
Fatal error: Uncaught Exception: blah in %sbug76025.php:%d
Stack trace:
#0 %sbug76025.php(%d): handleerror(8, 'Undefined index...', '%s', %d)
#1 {main}
  thrown in %sbug76025.php on line %d
