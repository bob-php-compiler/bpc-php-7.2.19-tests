--TEST--
Test uasort() function : error conditions
--FILE--
<?php
/* Prototype  : bool uasort(array $array_arg, string $cmp_function)
 * Description: Sort an array with a user-defined comparison function and maintain index association
 * Source code: ext/standard/array.c
*/

echo "*** Testing uasort() : error conditions ***\n";

// comparison function
/* Prototype : int cmp(mixed $value1, mixed $value2)
 * Parameters : $value1 and $value2 - values to be compared
 * Return value : 0 - if both values are same
 *                1 - if value1 is greater than value2
 *               -1 - if value1 is less than value2
 * Description : compares value1 and value2
 */
function cmp($value1, $value2)
{
  if($value1 == $value2) {
    return 0;
  }
  else if($value1 > $value2) {
    return 1;
  }
  else {
    return -1;
  }
}

// Initialize 'array_arg'
$array_arg = array(0 => 1, 1 => 10, 2 => 'string', 3 => 3, 4 => 2, 5 => 100, 6 => 25);

// With one more than the expected number of arguments
echo "-- Testing uasort() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( uasort($array_arg, 'cmp', $extra_arg) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function uasort(): 2 at most, 3 provided in %s on line %d
 -- compile-error
