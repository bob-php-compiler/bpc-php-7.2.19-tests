--TEST--
Test fmod() function : usage variations - different data types as $x argument
--FILE--
<?php
/* Prototype  : float fmod  ( float $x  , float $y  )
 * Description: Returns the floating point remainder (modulo) of the division of the arguments.
 * Source code: ext/standard/math.c
 */

echo "*** Testing fmod() : usage variations ***\n";

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// heredoc string
$heredoc = <<<EOT
abc
xyz
EOT;

// get a class
class classA
{
}

// get a resource variable
$fp = fopen('/proc/self/comm', "r");

$inputs = array(
       // int data
/*1*/  0,
       1,
       12345,
       -2345,
       2147483647,

       // float data
/*6*/  10.5,
       -10.5,
       12.3456789000e10,
       12.3456789000E-10,
       .5,

       // null data
/*11*/ NULL,
       null,

       // boolean data
/*13*/ true,
       false,
       TRUE,
       FALSE,

       // empty data
/*17*/ "",
       '',
       array(),

       // string data
/*20*/ "abcxyz",
       'abcxyz',
       $heredoc,

       // object data
/*23*/ new classA(),

       // undefined data
/*24*/ @$undefined_var,

       // unset data
/*25*/ @$unset_var,

       // resource variable
/*26*/ $fp
);

// loop through each element of $inputs to check the behaviour of fmod()
$iterator = 1;
foreach($inputs as $input) {
	echo "\n-- Iteration $iterator --\n";
	var_dump(fmod($input, 2));
	$iterator++;
};
fclose($fp);
?>
===Done===
--EXPECTF--
*** Testing fmod() : usage variations ***

-- Iteration 1 --
float(0)

-- Iteration 2 --
float(1)

-- Iteration 3 --
float(1)

-- Iteration 4 --
float(-1)

-- Iteration 5 --
float(1)

-- Iteration 6 --
float(0.5)

-- Iteration 7 --
float(-0.5)

-- Iteration 8 --
float(0)

-- Iteration 9 --
float(1.23456789E-9)

-- Iteration 10 --
float(0.5)

-- Iteration 11 --
float(0)

-- Iteration 12 --
float(0)

-- Iteration 13 --
float(1)

-- Iteration 14 --
float(0)

-- Iteration 15 --
float(1)

-- Iteration 16 --
float(0)

-- Iteration 17 --

Warning: fmod() expects parameter 1 to be float, string given in %s on line %d
NULL

-- Iteration 18 --

Warning: fmod() expects parameter 1 to be float, string given in %s on line %d
NULL

-- Iteration 19 --

Warning: fmod() expects parameter 1 to be float, array given in %s on line %d
NULL

-- Iteration 20 --

Warning: fmod() expects parameter 1 to be float, string given in %s on line %d
NULL

-- Iteration 21 --

Warning: fmod() expects parameter 1 to be float, string given in %s on line %d
NULL

-- Iteration 22 --

Warning: fmod() expects parameter 1 to be float, string given in %s on line %d
NULL

-- Iteration 23 --

Warning: fmod() expects parameter 1 to be float, object given in %s on line %d
NULL

-- Iteration 24 --
float(0)

-- Iteration 25 --
float(0)

-- Iteration 26 --

Warning: fmod() expects parameter 1 to be float, resource given in %s on line %d
NULL
===Done===
