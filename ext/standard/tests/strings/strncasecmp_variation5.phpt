--TEST--
Test strncasecmp() function : usage variations - unexpected values for 'len'
--SKIPIF--
<?php if (PHP_INT_SIZE != 8) die("skip this test is for 64-bit only");
--FILE--
<?php
/* Prototype  : int strncasecmp ( string $str1, string $str2, int $len );
 * Description: Binary safe case-insensitive string comparison of the first n characters
 * Source code: Zend/zend_builtin_functions.c
*/

/* Test strncasecmp() function with the unexpected values, and giving the same strings for 'str1' and 'str2' */

echo "*** Test strncasecmp() function: unexpected values for 'len' ***\n";

/* definition of required variables */
$str1 = "Hello, World\n";
$str2 = "Hello, World\n";

/* get an unset variable */
$unset_var = 'string_val';
unset($unset_var);

/* get resource handle */
$file_handle = fopen('/proc/self/comm', "r");

/* declaring a class */
class sample  {
  public function __toString() {
  return "object";
  }
}


/* array with different values */
$lengths =  array (

  /* float values */
  10.5,
  10.5e10,
  10.6E-10,
  .5,

  /* hexadecimal values */
  0x12,

  /* octal values */
  012,
  01.2,

  /* array values */
  array(),
  array(0),
  array(1),
  array(1, 2),
  array('color' => 'red', 'item' => 'pen'),

  /* boolean values */
  true,
  false,
  TRUE,
  FALSE,

  /* nulls */
  NULL,
  null,

  /* empty string */
  "",
  '',

  /* undefined variable */
  @$undefined_var,

  /* unset variable */
  @$unset_var,

  /* resource */
  $file_handle,

  /* object */
  new sample()
);

/* loop through each element of the array and check the working of strncasecmp() */
$counter = 1;
for($index = 0; $index < count($lengths); $index ++) {
  $len = $lengths[$index];
  echo "-- Iteration $counter --\n";
  var_dump( strncasecmp($str1, $str2, $len) );
  $counter ++;
}
fclose($file_handle);

echo "*** Done ***\n";
?>
--EXPECTF--
*** Test strncasecmp() function: unexpected values for 'len' ***
-- Iteration 1 --
int(0)
-- Iteration 2 --
int(0)
-- Iteration 3 --
int(0)
-- Iteration 4 --
int(0)
-- Iteration 5 --
int(0)
-- Iteration 6 --
int(0)
-- Iteration 7 --
int(0)
-- Iteration 8 --

Warning: strncasecmp() expects parameter 3 to be integer, array given in %s on line %d
NULL
-- Iteration 9 --

Warning: strncasecmp() expects parameter 3 to be integer, array given in %s on line %d
NULL
-- Iteration 10 --

Warning: strncasecmp() expects parameter 3 to be integer, array given in %s on line %d
NULL
-- Iteration 11 --

Warning: strncasecmp() expects parameter 3 to be integer, array given in %s on line %d
NULL
-- Iteration 12 --

Warning: strncasecmp() expects parameter 3 to be integer, array given in %s on line %d
NULL
-- Iteration 13 --
int(0)
-- Iteration 14 --
int(0)
-- Iteration 15 --
int(0)
-- Iteration 16 --
int(0)
-- Iteration 17 --
int(0)
-- Iteration 18 --
int(0)
-- Iteration 19 --

Warning: strncasecmp() expects parameter 3 to be integer, string given in %s on line %d
NULL
-- Iteration 20 --

Warning: strncasecmp() expects parameter 3 to be integer, string given in %s on line %d
NULL
-- Iteration 21 --
int(0)
-- Iteration 22 --
int(0)
-- Iteration 23 --

Warning: strncasecmp() expects parameter 3 to be integer, resource given in %s on line %d
NULL
-- Iteration 24 --

Warning: strncasecmp() expects parameter 3 to be integer, object given in %s on line %d
NULL
*** Done ***
