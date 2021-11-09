--TEST--
Test pathinfo() function: error conditions
--FILE--
<?php
/* Prototype: mixed pathinfo ( string $path [, int $options] );
   Description: Returns information about a file path
*/

echo "*** Testing pathinfo() for error conditions ***\n";
/* unexpected no. of arguments */
var_dump( pathinfo("/home/1.html", 1, 3) );  /* args > expected */

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function pathinfo(): 2 at most, 3 provided in %s on line %d
 -- compile-error
