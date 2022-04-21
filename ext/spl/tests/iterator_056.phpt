--TEST--
SPL: Calling __construct(void) on class extending SPL iterator
--CREDITS--
Sebastian Schürmann
--FILE--
<?php

class myFilterIterator extends FilterIterator {
	function accept() { }
}

class myCachingIterator extends CachingIterator { }

class myRecursiveCachingIterator extends RecursiveCachingIterator { }

class myParentIterator extends ParentIterator { }

class myLimitIterator extends LimitIterator { }

class myNoRewindIterator extends NoRewindIterator  {}

try {
	$it = new myFilterIterator();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
	$it = new myCachingIterator();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
	$it = new myRecursiveCachingIterator();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
	$it = new myParentIterator();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

try {
	$it = new myLimitIterator();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
try {
	$it = new myNoRewindIterator();
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

?>
--EXPECT--
Too few arguments to method FilterIterator::__construct(): 1 required, 0 provided
Too few arguments to method CachingIterator::__construct(): 1 required, 0 provided
Too few arguments to method RecursiveCachingIterator::__construct(): 1 required, 0 provided
Too few arguments to method ParentIterator::__construct(): 1 required, 0 provided
Too few arguments to method LimitIterator::__construct(): 1 required, 0 provided
Too few arguments to method NoRewindIterator::__construct(): 1 required, 0 provided
