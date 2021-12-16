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

// args more than expected
$var = 10.5;
var_dump( settype( $var, $var, "int" ) );

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function settype(): 2 at most, 3 provided in %s on line %d
 -- compile-error
