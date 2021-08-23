--TEST--
Bug #69640 Unhandled Error thrown from userland do not produce any output
--FILE--
<?php
throw new ParseError('I mess everything up! :trollface:');
?>
--EXPECTF--
Fatal error: Uncaught ParseError: I mess everything up! :trollface: in %sbug69640.php:2
Stack trace:
#0 {main}
  thrown in tests/bug69640.php on line 2
