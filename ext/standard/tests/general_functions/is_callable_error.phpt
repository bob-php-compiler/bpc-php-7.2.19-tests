--TEST--
Test is_callable() function
--FILE--
<?php
/* Prototype: bool is_callable ( mixed $var [, bool $syntax_only [, string &$callable_name]] );
   Description: Verify that the contents of a variable can be called as a function
                In case of objects, $var = array($SomeObject, 'MethodName')
*/

echo "\n*** Testing error conditions ***\n";

echo "\n-- Testing is_callable() function with less than expected no. of arguments --\n";
var_dump( is_callable() );

?>
===DONE===
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function is_callable(): 1 required, 0 provided in %s on line %d
 -- compile-error
