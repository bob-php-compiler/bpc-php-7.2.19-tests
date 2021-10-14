--TEST--
Test array_walk() function : usage variations - anonymous callback function
--FILE--
<?php
/* Prototype  : proto bool array_walk(array $input, string $funcname [, mixed $userdata])
 * Description: Apply a user function to every member of an array
 * Source code: ext/standard/array.c
*/

/*
* Passing anonymous(run-time) callback function with following variations:
*   with one parameter
*   two parameters
*   three parameters
*   extra parameters
*   without parameters
*/

echo "*** Testing array_walk() : anonymous function as callback ***\n";

$input = array(2, 5, 10, 0);

echo "-- Anonymous function with one more argument --\n";
var_dump( array_walk($input, function($value, $key, $user_data) { var_dump($key); var_dump($value); var_dump($user_data); echo "\n"; }, 20, 30));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_walk(): 3 at most, 4 provided in %s on line %d
 -- compile-error
