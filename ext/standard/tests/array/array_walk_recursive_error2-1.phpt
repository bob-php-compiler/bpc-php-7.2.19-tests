--TEST--
Test array_walk_recursive() function : error conditions - callback parameters
--FILE--
<?php
/* Prototype  : bool array_walk_recursive(array $input, string $funcname [, mixed $userdata])
 * Description: Apply a user function to every member of an array
 * Source code: ext/standard/array.c
*/

/*
 * Testing array_walk_recursive() by passing more number of parameters to callback function
 */
$input = array(1);

function callback1($value, $key, $user_data ) {
  echo "\ncallback1() invoked \n";
}

echo "-- Testing array_walk_recursive() function with too many callback parameters --\n";
try {
	var_dump( array_walk_recursive($input, "callback1", 20, 10) );
} catch (Throwable $e) {
	echo "Exception: " . $e->getMessage() . "\n";
}

echo "Done";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_walk_recursive(): 3 at most, 4 provided in %s on line %d
 -- compile-error
