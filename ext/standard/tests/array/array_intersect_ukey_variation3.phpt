--TEST--
Test array_intersect_ukey() function : usage variation - Passing unexpected values to callback argument
--FILE--
<?php
/* Prototype  : array array_intersect_ukey(array arr1, array arr2 [, array ...], callback key_compare_func)
 * Description: Computes the intersection of arrays using a callback function on the keys for comparison.
 * Source code: ext/standard/array.c
 */

echo "*** Testing array_intersect_ukey() : usage variation ***\n";

//Initialise arguments
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
$array3 = array('green' => 5, 'cyan'   => 8);

//get an unset variable
$unset_var = 10;
unset ($unset_var);

//resource variable
$fp = fopen('/proc/self/comm', "r");

// define some classes
class classWithToString
{
	public function __toString() {
		return "Class A object";
	}
}

class classWithoutToString
{
}

// add arrays
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);

//array of values to iterate over
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -12345,

      // float data
      'float 10.5' => 10.5,
      'float -10.5' => -10.5,
      'float 12.3456789000e10' => 12.3456789000e10,
      'float -12.3456789000e10' => -12.3456789000e10,
      'float .5' => .5,

      // array data
      'empty array' => array(),
      'int indexed array' => $index_array,
      'associative array' => $assoc_array,
      'nested arrays' => array('foo', $index_array, $assoc_array),

      // null data
      'uppercase NULL' => NULL,
      'lowercase null' => null,

      // boolean data
      'lowercase true' => true,
      'lowercase false' =>false,
      'uppercase TRUE' =>TRUE,
      'uppercase FALSE' =>FALSE,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,

      // resource data
      'resource var' => $fp,
);

// loop through each element of the array for key_compare_func
foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( array_intersect_ukey($array1, $array2, $value) );
      var_dump( array_intersect_ukey($array1, $array2, $array3, $value) );
};

fclose($fp);
?>
===DONE===
--EXPECTF--
*** Testing array_intersect_ukey() : usage variation ***

--int 0--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 0 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 0 given in %s on line %d
NULL

--int 1--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 1 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 1 given in %s on line %d
NULL

--int 12345--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 12345 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 12345 given in %s on line %d
NULL

--int -12345--

Warning: array_intersect_ukey() expects parameter 3 to be callable, -12345 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, -12345 given in %s on line %d
NULL

--float 10.5--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 10.5 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 10.5 given in %s on line %d
NULL

--float -10.5--

Warning: array_intersect_ukey() expects parameter 3 to be callable, -10.5 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, -10.5 given in %s on line %d
NULL

--float 12.3456789000e10--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 123456789000 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 123456789000 given in %s on line %d
NULL

--float -12.3456789000e10--

Warning: array_intersect_ukey() expects parameter 3 to be callable, -123456789000 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, -123456789000 given in %s on line %d
NULL

--float .5--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 0.5 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 0.5 given in %s on line %d
NULL

--empty array--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Array given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Array given in %s on line %d
NULL

--int indexed array--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Array given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Array given in %s on line %d
NULL

--associative array--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Array given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Array given in %s on line %d
NULL

--nested arrays--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Array given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Array given in %s on line %d
NULL

--uppercase NULL--

Warning: array_intersect_ukey() expects parameter 3 to be callable,  given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable,  given in %s on line %d
NULL

--lowercase null--

Warning: array_intersect_ukey() expects parameter 3 to be callable,  given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable,  given in %s on line %d
NULL

--lowercase true--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 1 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 1 given in %s on line %d
NULL

--lowercase false--

Warning: array_intersect_ukey() expects parameter 3 to be callable,  given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable,  given in %s on line %d
NULL

--uppercase TRUE--

Warning: array_intersect_ukey() expects parameter 3 to be callable, 1 given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, 1 given in %s on line %d
NULL

--uppercase FALSE--

Warning: array_intersect_ukey() expects parameter 3 to be callable,  given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable,  given in %s on line %d
NULL

--instance of classWithToString--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Class A object given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Class A object given in %s on line %d
NULL

--instance of classWithoutToString--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Object without __toString() given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Object without __toString() given in %s on line %d
NULL

--undefined var--

Warning: array_intersect_ukey() expects parameter 3 to be callable,  given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable,  given in %s on line %d
NULL

--unset var--

Warning: array_intersect_ukey() expects parameter 3 to be callable,  given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable,  given in %s on line %d
NULL

--resource var--

Warning: array_intersect_ukey() expects parameter 3 to be callable, Resource id #%d given in %s on line %d
NULL

Warning: array_intersect_ukey() expects parameter 4 to be callable, Resource id #%d given in %s on line %d
NULL
===DONE===
