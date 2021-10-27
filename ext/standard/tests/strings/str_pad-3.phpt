--TEST--
str_pad() function
--FILE--
<?php

echo "\n#### error conditions ####";

/* args more than expected,expected 4 */
$input_string = "str_pad()";
$pad_length = 20;
$pad_string = "-+";
str_pad($input_string, $pad_length, $pad_string, STR_PAD_LEFT, NULL );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function str_pad(): 4 at most, 5 provided in %s on line %d
 -- compile-error
