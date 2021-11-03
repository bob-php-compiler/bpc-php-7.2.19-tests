--TEST--
Test str_repeat() function
--FILE--
<?php
/* Prototype: string str_repeat ( string $input, int $multiplier );
   Description: Returns input repeated multiplier times. multiplier has to be
     greater than or equal to 0. If the multiplier is set to 0, the function
     will return an empty string.
*/

echo "\n\n*** Testing error conditions ***";
var_dump( str_repeat($input[0]) );  // args < expected

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function str_repeat(): 2 required, 1 provided in %s on line %d
 -- compile-error
