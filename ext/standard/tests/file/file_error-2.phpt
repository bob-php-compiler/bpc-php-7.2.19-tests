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

$filename = "file.tmp";
var_dump( file($filename, $filename, $filename, $filename) );  // more than expected number of arguments

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too many arguments to function file(): 3 at most, 4 provided in %s on line %d
 -- compile-error
