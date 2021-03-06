--TEST--
Test array_filter() function : error conditions
--FILE--
<?php
/* Prototype  : array array_filter(array $input [, callback $callback])
 * Description: Filters elements from the array via the callback.
 * Source code: ext/standard/array.c
*/

echo "*** Testing array_filter() : error conditions ***\n";

$input = array(0, 1, 2, 3, 5);
/*  callback function
 *  Prototype : bool odd(array $input)
 *  Parameters : $input - array for which each elements should be checked into the function
 *  Return Type : bool - true if element is odd and returns false otherwise
 *  Description : Function takes array as input and checks for its each elements.
*/
function odd($input)
{
  return ($input % 2 != 0);
}
$extra_arg = 10;

// with one more than the expected number of arguments
echo "-- Testing array_filter() function with more than expected no. of arguments --";
var_dump( array_filter($input, "odd", $extra_arg, $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function array_filter(): 3 at most, 4 provided in %s on line %d
 -- compile-error
