--TEST--
Test basename() function : error conditions
--FILE--
<?php
/* Prototype: string basename ( string $path [, string $suffix] );
   Description: Given a string containing a path to a file,
                this function will return the base name of the file.
                If the filename ends in suffix this will also be cut off.
*/
echo "*** Testing error conditions ***\n";

// passing invalid type arguments
$object = new stdclass;
var_dump( basename( array("string/bar") ) );
var_dump( basename( array("string/bar"), "bar" ) );
var_dump( basename( "bar", array("string/bar") ) );
var_dump( basename( $object, "bar" ) );
var_dump( basename( $object ) );
var_dump( basename( $object, $object ) );
var_dump( basename( "bar", $object ) );

echo "Done\n";
?>
--EXPECTF--
*** Testing error conditions ***

Warning: basename() expects parameter 1 to be string, array given in %s on line %d
NULL

Warning: basename() expects parameter 1 to be string, array given in %s on line %d
NULL

Warning: basename() expects parameter 2 to be string, array given in %s on line %d
NULL

Warning: basename() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: basename() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: basename() expects parameter 1 to be string, object given in %s on line %d
NULL

Warning: basename() expects parameter 2 to be string, object given in %s on line %d
NULL
Done
