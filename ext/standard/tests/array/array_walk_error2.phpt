--TEST--
Test array_walk() function : error conditions - callback parameters
--FILE--
<?php
/* Prototype  : bool array_walk(array $input, string $funcname [, mixed $userdata])
 * Description: Apply a user function to every member of an array
 * Source code: ext/standard/array.c
*/

/*
 * Testing array_walk() by passing more number of parameters to callback function
 */
$input = array(1);

function callback1($value, $key, $user_data ) {
  echo "\ncallback1() invoked \n";
}

function callback2($value, $key, $user_data1, $user_data2) {
  echo "\ncallback2() invoked \n";
}
echo "*** Testing array_walk() : error conditions - callback parameters ***\n";

// expected: Missing argument Warning
try {
	var_dump( array_walk($input, "callback1") );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}
try {
	var_dump( array_walk($input, "callback2", 4) );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

// expected: Warning is suppressed
try {
	var_dump( @array_walk($input, "callback1") );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}
try {
	var_dump( @array_walk($input, "callback2", 4) );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

echo "Done";
?>
--EXPECTF--
*** Testing array_walk() : error conditions - callback parameters ***
Exception: Too few arguments to function callback1(): 3 required, 2 provided
Exception: Too few arguments to function callback2(): 4 required, 3 provided
Exception: Too few arguments to function callback1(): 3 required, 2 provided
Exception: Too few arguments to function callback2(): 4 required, 3 provided
Done
