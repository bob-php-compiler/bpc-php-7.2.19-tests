--TEST--
Test sprintf() function : usage variations - float formats with float values
--FILE--
<?php
/* Prototype  : string sprintf(string $format [, mixed $arg1 [, mixed ...]])
 * Description: Return a formatted string
 * Source code: ext/standard/formatted_print.c
*/

echo "*** Testing sprintf() : float formats with float values ***\n";

// array of float type values

$float_values = array (
-2147483649, // float value
  2147483648,  // float value
  -0x80000001, // float value, beyond max negative int
  0x800000001, // float value, beyond max positive int
  020000000001, // float value, beyond max positive int
  -020000000001, // float value, beyond max negative int
  0.0,
  -0.1,
  10.0000000000000000005,
  10.5e+5,
  1e5,
  -1e5,
  1e-5,
  -1e-5,
  1e+5,
  -1e+5,
  1E5,
  -1E5,
  1E+5,
  -1E+5,
  1E-5,
  -1E-5,
  .5e+7,
  -.5e+7,
  .6e-19,
  -.6e-19,
  .05E+44,
  -.05E+44,
  .0034E-30,
  -.0034E-30
);

// various float formats
$float_formats = array(
  "%f", "%hf", "%lf",
  "%Lf", " %f", "%f ",
  "\t%f", "\n%f", "%4f",
  "%30f", "%[0-9]", "%*f",
);

$count = 1;
foreach($float_values as $float_value) {
  echo "\n-- Iteration $count --\n";

  foreach($float_formats as $format) {
    var_dump( sprintf($format, $float_value) );
  }
  $count++;
};

echo "Done";
?>
--EXPECTF--
Warning: truncate literal float '10.0000000000000000005' to '10.0', use string may avoid truncate
*** Testing sprintf() : float formats with float values ***

-- Iteration 1 --
string(18) "-2147483649.000000"
string(1) "f"
string(18) "-2147483649.000000"
string(1) "f"
string(19) " -2147483649.000000"
string(19) "-2147483649.000000 "
string(19) "	-2147483649.000000"
string(19) "
-2147483649.000000"
string(18) "-2147483649.000000"
string(30) "            -2147483649.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 2 --
string(17) "2147483648.000000"
string(1) "f"
string(17) "2147483648.000000"
string(1) "f"
string(18) " 2147483648.000000"
string(18) "2147483648.000000 "
string(18) "	2147483648.000000"
string(18) "
2147483648.000000"
string(17) "2147483648.000000"
string(30) "             2147483648.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 3 --
string(18) "-2147483649.000000"
string(1) "f"
string(18) "-2147483649.000000"
string(1) "f"
string(19) " -2147483649.000000"
string(19) "-2147483649.000000 "
string(19) "	-2147483649.000000"
string(19) "
-2147483649.000000"
string(18) "-2147483649.000000"
string(30) "            -2147483649.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 4 --
string(18) "34359738369.000000"
string(1) "f"
string(18) "34359738369.000000"
string(1) "f"
string(19) " 34359738369.000000"
string(19) "34359738369.000000 "
string(19) "	34359738369.000000"
string(19) "
34359738369.000000"
string(18) "34359738369.000000"
string(30) "            34359738369.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 5 --
string(17) "2147483649.000000"
string(1) "f"
string(17) "2147483649.000000"
string(1) "f"
string(18) " 2147483649.000000"
string(18) "2147483649.000000 "
string(18) "	2147483649.000000"
string(18) "
2147483649.000000"
string(17) "2147483649.000000"
string(30) "             2147483649.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 6 --
string(18) "-2147483649.000000"
string(1) "f"
string(18) "-2147483649.000000"
string(1) "f"
string(19) " -2147483649.000000"
string(19) "-2147483649.000000 "
string(19) "	-2147483649.000000"
string(19) "
-2147483649.000000"
string(18) "-2147483649.000000"
string(30) "            -2147483649.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 7 --
string(8) "0.000000"
string(1) "f"
string(8) "0.000000"
string(1) "f"
string(9) " 0.000000"
string(9) "0.000000 "
string(9) "	0.000000"
string(9) "
0.000000"
string(8) "0.000000"
string(30) "                      0.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 8 --
string(9) "-0.100000"
string(1) "f"
string(9) "-0.100000"
string(1) "f"
string(10) " -0.100000"
string(10) "-0.100000 "
string(10) "	-0.100000"
string(10) "
-0.100000"
string(9) "-0.100000"
string(30) "                     -0.100000"
string(4) "0-9]"
string(1) "f"

-- Iteration 9 --
string(9) "10.000000"
string(1) "f"
string(9) "10.000000"
string(1) "f"
string(10) " 10.000000"
string(10) "10.000000 "
string(10) "	10.000000"
string(10) "
10.000000"
string(9) "10.000000"
string(30) "                     10.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 10 --
string(14) "1050000.000000"
string(1) "f"
string(14) "1050000.000000"
string(1) "f"
string(15) " 1050000.000000"
string(15) "1050000.000000 "
string(15) "	1050000.000000"
string(15) "
1050000.000000"
string(14) "1050000.000000"
string(30) "                1050000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 11 --
string(13) "100000.000000"
string(1) "f"
string(13) "100000.000000"
string(1) "f"
string(14) " 100000.000000"
string(14) "100000.000000 "
string(14) "	100000.000000"
string(14) "
100000.000000"
string(13) "100000.000000"
string(30) "                 100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 12 --
string(14) "-100000.000000"
string(1) "f"
string(14) "-100000.000000"
string(1) "f"
string(15) " -100000.000000"
string(15) "-100000.000000 "
string(15) "	-100000.000000"
string(15) "
-100000.000000"
string(14) "-100000.000000"
string(30) "                -100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 13 --
string(8) "0.000010"
string(1) "f"
string(8) "0.000010"
string(1) "f"
string(9) " 0.000010"
string(9) "0.000010 "
string(9) "	0.000010"
string(9) "
0.000010"
string(8) "0.000010"
string(30) "                      0.000010"
string(4) "0-9]"
string(1) "f"

-- Iteration 14 --
string(9) "-0.000010"
string(1) "f"
string(9) "-0.000010"
string(1) "f"
string(10) " -0.000010"
string(10) "-0.000010 "
string(10) "	-0.000010"
string(10) "
-0.000010"
string(9) "-0.000010"
string(30) "                     -0.000010"
string(4) "0-9]"
string(1) "f"

-- Iteration 15 --
string(13) "100000.000000"
string(1) "f"
string(13) "100000.000000"
string(1) "f"
string(14) " 100000.000000"
string(14) "100000.000000 "
string(14) "	100000.000000"
string(14) "
100000.000000"
string(13) "100000.000000"
string(30) "                 100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 16 --
string(14) "-100000.000000"
string(1) "f"
string(14) "-100000.000000"
string(1) "f"
string(15) " -100000.000000"
string(15) "-100000.000000 "
string(15) "	-100000.000000"
string(15) "
-100000.000000"
string(14) "-100000.000000"
string(30) "                -100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 17 --
string(13) "100000.000000"
string(1) "f"
string(13) "100000.000000"
string(1) "f"
string(14) " 100000.000000"
string(14) "100000.000000 "
string(14) "	100000.000000"
string(14) "
100000.000000"
string(13) "100000.000000"
string(30) "                 100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 18 --
string(14) "-100000.000000"
string(1) "f"
string(14) "-100000.000000"
string(1) "f"
string(15) " -100000.000000"
string(15) "-100000.000000 "
string(15) "	-100000.000000"
string(15) "
-100000.000000"
string(14) "-100000.000000"
string(30) "                -100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 19 --
string(13) "100000.000000"
string(1) "f"
string(13) "100000.000000"
string(1) "f"
string(14) " 100000.000000"
string(14) "100000.000000 "
string(14) "	100000.000000"
string(14) "
100000.000000"
string(13) "100000.000000"
string(30) "                 100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 20 --
string(14) "-100000.000000"
string(1) "f"
string(14) "-100000.000000"
string(1) "f"
string(15) " -100000.000000"
string(15) "-100000.000000 "
string(15) "	-100000.000000"
string(15) "
-100000.000000"
string(14) "-100000.000000"
string(30) "                -100000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 21 --
string(8) "0.000010"
string(1) "f"
string(8) "0.000010"
string(1) "f"
string(9) " 0.000010"
string(9) "0.000010 "
string(9) "	0.000010"
string(9) "
0.000010"
string(8) "0.000010"
string(30) "                      0.000010"
string(4) "0-9]"
string(1) "f"

-- Iteration 22 --
string(9) "-0.000010"
string(1) "f"
string(9) "-0.000010"
string(1) "f"
string(10) " -0.000010"
string(10) "-0.000010 "
string(10) "	-0.000010"
string(10) "
-0.000010"
string(9) "-0.000010"
string(30) "                     -0.000010"
string(4) "0-9]"
string(1) "f"

-- Iteration 23 --
string(14) "5000000.000000"
string(1) "f"
string(14) "5000000.000000"
string(1) "f"
string(15) " 5000000.000000"
string(15) "5000000.000000 "
string(15) "	5000000.000000"
string(15) "
5000000.000000"
string(14) "5000000.000000"
string(30) "                5000000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 24 --
string(15) "-5000000.000000"
string(1) "f"
string(15) "-5000000.000000"
string(1) "f"
string(16) " -5000000.000000"
string(16) "-5000000.000000 "
string(16) "	-5000000.000000"
string(16) "
-5000000.000000"
string(15) "-5000000.000000"
string(30) "               -5000000.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 25 --
string(8) "0.000000"
string(1) "f"
string(8) "0.000000"
string(1) "f"
string(9) " 0.000000"
string(9) "0.000000 "
string(9) "	0.000000"
string(9) "
0.000000"
string(8) "0.000000"
string(30) "                      0.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 26 --
string(9) "-0.000000"
string(1) "f"
string(9) "-0.000000"
string(1) "f"
string(10) " -0.000000"
string(10) "-0.000000 "
string(10) "	-0.000000"
string(10) "
-0.000000"
string(9) "-0.000000"
string(30) "                     -0.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 27 --
string(50) "5000000000000000069686058479707049565356032.000000"
string(1) "f"
string(50) "5000000000000000069686058479707049565356032.000000"
string(1) "f"
string(51) " 5000000000000000069686058479707049565356032.000000"
string(51) "5000000000000000069686058479707049565356032.000000 "
string(51) "	5000000000000000069686058479707049565356032.000000"
string(51) "
5000000000000000069686058479707049565356032.000000"
string(50) "5000000000000000069686058479707049565356032.000000"
string(50) "5000000000000000069686058479707049565356032.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 28 --
string(51) "-5000000000000000069686058479707049565356032.000000"
string(1) "f"
string(51) "-5000000000000000069686058479707049565356032.000000"
string(1) "f"
string(52) " -5000000000000000069686058479707049565356032.000000"
string(52) "-5000000000000000069686058479707049565356032.000000 "
string(52) "	-5000000000000000069686058479707049565356032.000000"
string(52) "
-5000000000000000069686058479707049565356032.000000"
string(51) "-5000000000000000069686058479707049565356032.000000"
string(51) "-5000000000000000069686058479707049565356032.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 29 --
string(8) "0.000000"
string(1) "f"
string(8) "0.000000"
string(1) "f"
string(9) " 0.000000"
string(9) "0.000000 "
string(9) "	0.000000"
string(9) "
0.000000"
string(8) "0.000000"
string(30) "                      0.000000"
string(4) "0-9]"
string(1) "f"

-- Iteration 30 --
string(9) "-0.000000"
string(1) "f"
string(9) "-0.000000"
string(1) "f"
string(10) " -0.000000"
string(10) "-0.000000 "
string(10) "	-0.000000"
string(10) "
-0.000000"
string(9) "-0.000000"
string(30) "                     -0.000000"
string(4) "0-9]"
string(1) "f"
Done
