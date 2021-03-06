--TEST--
Test is_a() function : error conditions - wrong number of args
--INI--
error_reporting=32767
--FILE--
<?php
// E_ALL | E_STRICT | E_DEPRECATED = 32767
/* Prototype  : proto bool is_a(object object, string class_name, bool allow_string)
 * Description: Returns true if the object is of this class or has this class as one of its parents
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions:
 */

echo "*** Testing is_a() : error conditions ***\n";

$object = new stdclass();
$class_name = 'string_val';

echo "\n-- Testing is_a() function with non-boolean in last position --\n";
var_dump( is_a($object, $class_name, $object) );


echo "Done";
?>
--EXPECTF--
*** Testing is_a() : error conditions ***

-- Testing is_a() function with non-boolean in last position --

Warning: is_a() expects parameter 3 to be boolean, object given in %s on line %d
NULL
Done
