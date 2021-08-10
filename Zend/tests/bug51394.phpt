--TEST--
Bug #51394 (Error line reported incorrectly if error handler throws an exception)
--INI--
error_reporting=-1
--FILE--
<?php
function eh($errno, $errstr, $errfile, $errline)
{
	throw new Exception("error!");
	return false;
}

set_error_handler("eh");
$a = array(); $b = $a[0];
--EXPECTF--
Fatal error: Uncaught Exception: error! in %sbug51394.php:%d
Stack trace:
#0 %sbug51394.php(%d): eh(8, 'Undefined offse...', '%s', %d)
#1 {main}
  thrown in %sbug51394.php on line %d
