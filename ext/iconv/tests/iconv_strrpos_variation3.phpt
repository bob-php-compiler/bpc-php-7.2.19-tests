--TEST--
Test iconv_strrpos() function : usage variations - pass different data types as $encoding arg
--FILE--
<?php
/* Prototype  : proto int iconv_strrpos(string haystack, string needle [, string charset])
 * Description: Find position of last occurrence of a string within another
 * Source code: ext/iconv/iconv.c
 */

/*
 * Pass iconv_strrpos() different data types as $encoding argument to test behaviour
 * Where possible 'UTF-8' has been entered as a string value
 */

echo "*** Testing iconv_strrpos() : usage variations ***\n";

// Initialise function arguments not being substituted
$haystack = 'hello, world';
$needle = 'world';

//get an unset variable
$unset_var = 10;
unset ($unset_var);

// get a class
class classA
{
  public function __toString() {
    return "UTF-8";
  }
}

// heredoc string
$heredoc = <<<EOT
UTF-8
EOT;

// get a resource variable
$fp = fopen('/proc/self/comm', "r");

// unexpected values to be passed to $encoding argument
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
/*18*/ "UTF-8",
       'UTF-8',
       $heredoc,

       // object data
/*21*/ new classA(),

       // undefined data
/*22*/ @$undefined_var,

       // unset data
/*23*/ @$unset_var,

       // resource variable
/*24*/ $fp
);

// loop through each element of $inputs to check the behavior of iconv_strrpos()
$iterator = 1;
foreach($inputs as $input) {
  echo "\n-- Iteration $iterator --\n";
  var_dump( iconv_strrpos($haystack, $needle, $input));
  $iterator++;
};

fclose($fp);

echo "Done";
?>
--EXPECTF--
*** Testing iconv_strrpos() : usage variations ***

-- Iteration 1 --

Notice: iconv_strrpos(): Wrong charset, conversion from `0' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 2 --

Notice: iconv_strrpos(): Wrong charset, conversion from `1' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 3 --

Notice: iconv_strrpos(): Wrong charset, conversion from `12345' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 4 --

Notice: iconv_strrpos(): Wrong charset, conversion from `-2345' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 5 --

Notice: iconv_strrpos(): Wrong charset, conversion from `10.5' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 6 --

Notice: iconv_strrpos(): Wrong charset, conversion from `-10.5' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 7 --

Notice: iconv_strrpos(): Wrong charset, conversion from `123456789000' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 8 --

Notice: iconv_strrpos(): Wrong charset, conversion from `1.23456789E-9' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 9 --

Notice: iconv_strrpos(): Wrong charset, conversion from `0.5' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 10 --
int(7)

-- Iteration 11 --
int(7)

-- Iteration 12 --

Notice: iconv_strrpos(): Wrong charset, conversion from `1' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 13 --
int(7)

-- Iteration 14 --

Notice: iconv_strrpos(): Wrong charset, conversion from `1' to `UCS-4LE' is not allowed in %s on line %d
bool(false)

-- Iteration 15 --
int(7)

-- Iteration 16 --
int(7)

-- Iteration 17 --
int(7)

-- Iteration 18 --
int(7)

-- Iteration 19 --
int(7)

-- Iteration 20 --
int(7)

-- Iteration 21 --
int(7)

-- Iteration 22 --
int(7)

-- Iteration 23 --
int(7)

-- Iteration 24 --

Warning: iconv_strrpos() expects parameter 3 to be string, resource given in %s on line %d
bool(false)
Done
