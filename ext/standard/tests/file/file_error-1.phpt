--TEST--
Test file() function : error conditions
--FILE--
<?php
/*
   Prototype: array file ( string filename [,int use-include_path [,resource context]] );
   Description: Reads entire file into an array
                Returns the  file in an array
*/
echo "\n*** Testing error conditions ***";
var_dump( file() );  // Zero No. of args

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function file(): 1 required, 0 provided in %s on line %d
 -- compile-error
