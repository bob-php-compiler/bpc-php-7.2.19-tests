--TEST--
Test in_array() function : error conditions
--FILE--
<?php
/*
 * Prototype  : bool in_array ( mixed $needle, array $haystack [, bool $strict] )
 * Description: Searches haystack for needle and returns TRUE
 *              if it is found in the array, FALSE otherwise.
 * Source Code: ext/standard/array.c
*/

echo "\n*** Testing error conditions of in_array() ***\n";

/* unexpected second argument in in_array() */
$var="test";
var_dump( in_array("test", $var) );
var_dump( in_array(1, 123) );

echo "Done\n";
?>
--EXPECTF--
*** Testing error conditions of in_array() ***

Warning: in_array() expects parameter 2 to be array, string given in %s on line %d
NULL

Warning: in_array() expects parameter 2 to be array, integer given in %s on line %d
NULL
Done
