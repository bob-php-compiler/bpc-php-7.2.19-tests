--TEST--
Test array_walk() function : error conditions - callback parameters
--FILE--
<?php

echo "-- Testing array_walk() function with too many callback parameters --\n";
try {
	var_dump( array_walk($input, "callback1", 20, 10) );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_walk(): 3 at most, 4 provided in %s on line %d
 -- compile-error
