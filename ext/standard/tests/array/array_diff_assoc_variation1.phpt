--TEST--
Test array_diff_assoc() function : usage variations  - unexpected values for 'arr1' argument
--FILE--
<?php
/* Prototype  : array array_diff_assoc(array $arr1, array $arr2 [, array ...])
 * Description: Returns the entries of $arr1 that have values which are not present
 * in any of the others arguments but do additional checks whether the keys are equal
 * Source code: ext/standard/array.c
 */

/*
 * Pass array_diff_assoc arguments that are not arrays in place of $arr1
 */

echo "*** Testing array_diff_assoc() : usage variations ***\n";

$array = array(1, 2, 3);

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// get a class
class classA
{
  public function __toString() {
    return "Class A object";
  }
}

// heredoc string
$heredoc = <<<EOT
hello world
EOT;

// get a resource variable
$fp = fopen('/proc/self/comm', "r");

//array of unexpected values to be passed to $arr1 argument
$inputs = array(

       // int data
/*1*/  0,
       1,
       12345,
       -2345,

       // float data
/*5*/  10.5,
       -10.5,
       12.3456789000e10,
       12.3456789000E-10,
       .5,

       // null data
/*10*/ NULL,
       null,

       // boolean data
/*12*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*16*/ "",
       '',

       // string data
/*18*/ "string",
       'string',
       $heredoc,

       // binary data
/*21*/ "binary",
	   "binary",

       // object data
/*23*/ new classA(),

       // undefined data
/*24*/ @$undefined_var,

       // unset data
/*25*/ @$unset_var,

       // resource variable
/*26*/ $fp,
);

// loop through each element of $inputs to check the behavior of array_diff_assoc
$iterator = 1;
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  var_dump( array_diff_assoc($input, $array));
  $iterator++;
};
fclose($fp);
echo "Done";
?>
--EXPECTF--
*** Testing array_diff_assoc() : usage variations ***

-- Iteration 1 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 2 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 3 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 4 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 5 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 6 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 7 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 8 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 9 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 10 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 11 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 12 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 13 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 14 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 15 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 16 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 17 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 18 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 19 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 20 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 21 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 22 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 23 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 24 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 25 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL

-- Iteration 26 --

Warning: array_diff_assoc(): Argument #1 is not an array in %s on line %d
NULL
Done
