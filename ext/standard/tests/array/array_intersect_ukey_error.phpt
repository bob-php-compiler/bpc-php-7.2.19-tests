--TEST--
Test array_intersect_ukey() function : error conditions
--FILE--
<?php
/* Prototype  : array array_intersect_ukey(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays using a callback function on the keys for comparison.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_ukey() : error conditions ***\n";

//Initialise arguments
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

//Call back function
function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else
        return ($key1 > $key2)? 1:-1;
}

//Test array_intersect_ukey with one more than the expected number of arguments
echo "\n-- Testing array_intersect_ukey() function with more than expected no. of arguments --\n";
$extra_arg = 10;
var_dump( array_intersect_ukey($array1, $array2, 'key_compare_func',$extra_arg) );

?>
===DONE===
--EXPECTF--
*** Testing array_intersect_ukey() : error conditions ***

-- Testing array_intersect_ukey() function with more than expected no. of arguments --

Warning: array_intersect_ukey() expects parameter 4 to be callable, 10 given in %s on line %d
NULL
===DONE===
