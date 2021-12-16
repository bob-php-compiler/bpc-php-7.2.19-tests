--TEST--
Test gettype() & settype() functions : error conditions
--FILE--
<?php
/* Prototype: string gettype ( mixed $var );
   Description: Returns the type of the PHP variable var

   Prototype: bool settype ( mixed &$var, string $type );
   Description: Set the type of variable var to type
*/

/* Test different error conditions of settype() and gettype() functions */

echo "**** Testing gettype() and settype() functions ****\n";

echo "\n*** Testing gettype(): error conditions ***\n";
//Zero arguments
var_dump( gettype() );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function gettype(): 1 required, 0 provided in %s on line %d
 -- compile-error
