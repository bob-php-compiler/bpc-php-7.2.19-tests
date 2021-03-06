--TEST--
BUG #77664 (Segmentation fault when using undefined constant in custom wrapper)
--SKIPIF--
skip not support streamWrapper
--FILE--
<?php
class ErrorWrapper {
	public $context;
	public $var = self::INVALID;
}
stream_wrapper_register('error',ErrorWrapper::class);
file_get_contents('error://test');
?>
--EXPECTF--
Warning: file_get_contents(error://test): failed to open stream: operation failed in %sbug77664.php on line %d

Fatal error: Uncaught Error: Undefined class constant 'self::INVALID' in %sbug77664.php:%d
Stack trace:
#0 %sbug77664.php(%d): file_get_contents('error://test')
#1 {main}
  thrown in %sbug77664.php on line %d
