--TEST--
Test array_uintersect_uassoc() function : usage variation
--ARGS--
--bpc-include-file ext/standard/tests/array/compare_function.inc \
--FILE--
<?php
/* Prototype  : array array_uintersect_uassoc(array arr1, array arr2 [, array ...], callback data_compare_func, callback key_compare_func)
 * Description: Returns the entries of arr1 that have values which are present in all the other arguments. Keys are used to do more restrictive check. Both data and keys are compared by using user-supplied callbacks.
 * Source code: ext/standard/array.c
 * Alias to functions:
 */

echo "*** Testing array_uintersect_uassoc() : usage variation ***\n";

// Initialise function arguments not being substituted (if any)
$arr1 = array(1, 2);
$arr2 = array(1, 2);

include('compare_function.inc');
$data_compare_func = 'compare_function';

//get an unset variable
$unset_var = 10;
unset ($unset_var);

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

// heredoc string
$heredoc = <<<EOT
hello world
EOT;

// add arrays
$index_array = array (1, 2, 3);
$assoc_array = array ('one' => 1, 'two' => 2);

//array of values to iterate over
$inputs = array(

      // int data
      'int 0' => 0,
      'int 1' => 1,
      'int 12345' => 12345,
      'int -12345' => -2345,

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

      // empty data
      'empty string DQ' => "",
      'empty string SQ' => '',

      // string data
      'string DQ' => "string",
      'string SQ' => 'string',
      'mixed case string' => "sTrInG",
      'heredoc' => $heredoc,

      // object data
      'instance of classWithToString' => new classWithToString(),
      'instance of classWithoutToString' => new classWithoutToString(),

      // undefined data
      'undefined var' => @$undefined_var,

      // unset data
      'unset var' => @$unset_var,
);

// loop through each element of the array for key_compare_func

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( array_uintersect_uassoc($arr1, $arr2, $data_compare_func, $value) );
};

?>
===DONE===
--EXPECTF--
*** Testing array_uintersect_uassoc() : usage variation ***

--int 0--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 0 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--int 1--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 1 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--int 12345--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 12345 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--int -12345--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, -2345 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--float 10.5--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 10.5 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--float -10.5--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, -10.5 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--float 12.3456789000e10--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 123456789000 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--float -12.3456789000e10--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, -123456789000 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--float .5--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 0.5 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--empty array--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, Array given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--int indexed array--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, Array given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--associative array--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, Array given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--nested arrays--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, Array given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--uppercase NULL--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--lowercase null--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--lowercase true--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 1 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--lowercase false--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--uppercase TRUE--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, 1 given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--uppercase FALSE--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--empty string DQ--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--empty string SQ--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--string DQ--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, string given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--string SQ--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, string given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--mixed case string--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, sTrInG given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--heredoc--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, hello world given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--instance of classWithToString--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, Class A object given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--instance of classWithoutToString--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable, Object without __toString() given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--undefined var--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL

--unset var--

Warning: array_uintersect_uassoc() expects parameter 4 to be callable,  given in %sarray_uintersect_uassoc_variation4.php on line %d
NULL
===DONE===
