--TEST--
SPL: RecursiveIteratorIterator::__construct(void)
--CREDITS--
Sebastian Schürmann
--FILE--
<?php
class myRecursiveIteratorIterator extends RecursiveIteratorIterator {

}

try {
	$it = new myRecursiveIteratorIterator();
} catch (InvalidArgumentException $e) {
	echo 'InvalidArgumentException thrown';
}
?>
--EXPECTF--
Fatal error: Uncaught ArgumentCountError: Too few arguments to method RecursiveIteratorIterator::__construct(): 1 required, 0 provided in %s:7
Stack trace:
#0 {main}
  thrown in %s on line 7
