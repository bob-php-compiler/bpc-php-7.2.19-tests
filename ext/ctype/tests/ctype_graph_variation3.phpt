--TEST--
Test ctype_graph() function : usage variations - different strings
--FILE--
<?php
/* Prototype  : bool ctype_graph(mixed $c)
 * Description: Checks for any printable character(s) except space
 * Source code: ext/ctype/ctype.c
 */

/*
 * Pass strings containing different character types to ctype_graph() to test
 * which are considered valid printable character only strings
 */

echo "*** Testing ctype_graph() : usage variations ***\n";

$orig = setlocale(LC_CTYPE, "C");

$values = array(
/*1*/  "This string contains just letters and spaces", // Simple string
       "but this one contains some numbers too 123+456 = 678", // Mixed string
       "",
       " ",
/*5*/  "a",
       "ABCXYZ",
       "abcxyz",
       "ABCXYZ123DEF456",
       "abczyz123DEF456",
/*10*/ "\r\n",
       "123",
       "03F", // hexadecimal 'digits'
       ")speci@! ch@r$(",
       '@!$*',
/*15*/ 'ABC',
       'abc',
       'ABC123',
       'abc123',
       "abc123\n",
/*20*/ 'abc 123',
       '',
       ' ',
       base64_decode("w4DDoMOHw6fDiMOo"), // non-ascii characters
       "!$%^&*()_+-={}[]:;@~'#<,>.?/",
/*25*/ "\"ABC\"",
       "String\twith\ttabs",
       "Sample string with newline\n",
/*28*/ "123 ABC XYZ",
);

$iterator = 1;
foreach($values as $value) {
      echo "\n-- Iteration $iterator --\n";
      var_dump( ctype_graph($value) );
      $iterator++;
};

setlocale(LC_CTYPE, $orig);
?>
===DONE===
--EXPECTF--
*** Testing ctype_graph() : usage variations ***

-- Iteration 1 --
bool(false)

-- Iteration 2 --
bool(false)

-- Iteration 3 --
bool(false)

-- Iteration 4 --
bool(false)

-- Iteration 5 --
bool(true)

-- Iteration 6 --
bool(true)

-- Iteration 7 --
bool(true)

-- Iteration 8 --
bool(true)

-- Iteration 9 --
bool(true)

-- Iteration 10 --
bool(false)

-- Iteration 11 --
bool(true)

-- Iteration 12 --
bool(true)

-- Iteration 13 --
bool(false)

-- Iteration 14 --
bool(true)

-- Iteration 15 --
bool(true)

-- Iteration 16 --
bool(true)

-- Iteration 17 --
bool(true)

-- Iteration 18 --
bool(true)

-- Iteration 19 --
bool(false)

-- Iteration 20 --
bool(false)

-- Iteration 21 --
bool(false)

-- Iteration 22 --
bool(false)

-- Iteration 23 --
bool(false)

-- Iteration 24 --
bool(true)

-- Iteration 25 --
bool(true)

-- Iteration 26 --
bool(false)

-- Iteration 27 --
bool(false)

-- Iteration 28 --
bool(false)
===DONE===
