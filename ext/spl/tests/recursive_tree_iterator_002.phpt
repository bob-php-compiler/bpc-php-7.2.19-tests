--TEST--
SPL: RecursiveTreeIterator(void)
--INI--
error_reporting=32759
--FILE--
<?php
// E_ALL&~E_NOTICE = 32759
try {
	new RecursiveTreeIterator();
} catch (InvalidArgumentException $e) {
	echo "InvalidArgumentException thrown\n";
}
?>
===DONE===
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to method RecursiveTreeIterator::__construct(): 1 required, 0 provided in %s:4
Stack trace:
#0 {main}
  thrown in %s on line 4
