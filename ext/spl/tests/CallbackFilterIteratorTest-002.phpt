--TEST--
CallbackFilterIterator 002
--FILE--
<?php

set_error_handler(function($errno, $errstr){
	echo $errstr . "\n";
	return true;
});

try {
	new CallbackFilterIterator();
} catch (TypeError $e) {
	echo $e->getMessage() . "\n";
}

try {
	new CallbackFilterIterator(null);
} catch (TypeError $e) {
	echo $e->getMessage() . "\n";
}

try {
	new CallbackFilterIterator(new ArrayIterator(array()), null);
} catch (TypeError $e) {
	echo $e->getMessage() . "\n";
}

try {
	new CallbackFilterIterator(new ArrayIterator(array()), array());
} catch (TypeError $e) {
	echo $e->getMessage() . "\n";
}

$it = new CallbackFilterIterator(new ArrayIterator(array(1)), function($current, $key, $iterator) {
	throw new Exception("some message");
});
try {
	foreach($it as $e);
} catch(Exception $e) {
	echo $e->getMessage() . "\n";
}
--EXPECT--
Too few arguments to method CallbackFilterIterator::__construct(): 2 required, 0 provided
Too few arguments to method CallbackFilterIterator::__construct(): 2 required, 1 provided
CallbackFilterIterator::__construct() expects parameter 2 to be callable,  given
CallbackFilterIterator::__construct() expects parameter 2 to be callable, Array given
some message
