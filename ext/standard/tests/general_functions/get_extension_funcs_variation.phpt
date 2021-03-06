--TEST--
Test get_extension_funcs() function : error conditions
--FILE--
<?php
/* Prototype  : array get_extension_funcs  ( string $module_name  )
 * Description: Returns an array with the names of the functions of a module.
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing get_extension_funcs() function: with unexpected inputs for 'module_name' argument ***\n";

//get an unset variable
$unset_var = 'string_val';
unset($unset_var);

//defining a class
class sample  {
  public function __toString() {
    return "sample object";
  }
}

//getting the resource
$file_handle = fopen('/proc/self/comm', "r");

// array with different values for $str
$inputs =  array (

  // integer values
  0,
  1,
  255,
  256,
  PHP_INT_MAX,
  -PHP_INT_MAX,

  // float values
  10.5,
  -20.5,
  10.1234567e10,

  // array values
  array(),
  array(0),
  array(1, 2),

  // boolean values
  true,
  false,
  TRUE,
  FALSE,

  // null values
  NULL,
  null,

  // objects
  new sample(),

  // resource
  $file_handle,

  // undefined variable
  @$undefined_var,

  // unset variable
  @$unset_var
);

// loop through with each element of the $inputs array to test get_extension_funcs() function
$count = 1;
foreach($inputs as $input) {
  echo "-- Iteration $count --\n";
  var_dump( get_extension_funcs($input) );
  $count ++;
}

fclose($file_handle);  //closing the file handle

?>
===DONE===
--EXPECTF--
*** Testing get_extension_funcs() function: with unexpected inputs for 'module_name' argument ***
-- Iteration 1 --
bool(false)
-- Iteration 2 --
bool(false)
-- Iteration 3 --
bool(false)
-- Iteration 4 --
bool(false)
-- Iteration 5 --
bool(false)
-- Iteration 6 --
bool(false)
-- Iteration 7 --
bool(false)
-- Iteration 8 --
bool(false)
-- Iteration 9 --
bool(false)
-- Iteration 10 --

Warning: get_extension_funcs() expects parameter 1 to be string, array given in %s on line %d
NULL
-- Iteration 11 --

Warning: get_extension_funcs() expects parameter 1 to be string, array given in %s on line %d
NULL
-- Iteration 12 --

Warning: get_extension_funcs() expects parameter 1 to be string, array given in %s on line %d
NULL
-- Iteration 13 --
bool(false)
-- Iteration 14 --
bool(false)
-- Iteration 15 --
bool(false)
-- Iteration 16 --
bool(false)
-- Iteration 17 --
bool(false)
-- Iteration 18 --
bool(false)
-- Iteration 19 --
bool(false)
-- Iteration 20 --

Warning: get_extension_funcs() expects parameter 1 to be string, resource given in %s on line %d
NULL
-- Iteration 21 --
bool(false)
-- Iteration 22 --
bool(false)
===DONE===
