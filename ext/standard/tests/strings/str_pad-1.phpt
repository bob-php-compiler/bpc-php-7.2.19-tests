--TEST--
str_pad() function
--FILE--
<?php

echo "\n#### error conditions ####";
/* args less than min. expected of 2 */
str_pad();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_pad(): 2 required, 0 provided in %s on line %d
 -- compile-error
