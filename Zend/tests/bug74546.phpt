--TEST--
Bug #74546 (SIGILL in ZEND_FETCH_CLASS_CONSTANT_SPEC_CONST_CONST_HANDLER())
--SKIPIF--
skip not support literal string offset
--FILE--
<?php
"000000"[0]::d;
?>
--EXPECTF--
Fatal error: Uncaught Error: Class '0' not found in %sbug74546.php:%d
Stack trace:
#0 {main}
  thrown in %sbug74546.php on line %d
