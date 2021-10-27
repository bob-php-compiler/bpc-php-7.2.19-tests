--TEST--
str_pad() function
--FILE--
<?php

echo "\n#### error conditions ####";
/* args less than min. expected of 2 */
$input_string = "str_pad()";
str_pad($input_string);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_pad(): 2 required, 1 provided in %s on line %d
 -- compile-error
