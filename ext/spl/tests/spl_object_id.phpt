--TEST--
SPL: spl_object_id()
--FILE--
<?php

var_dump(spl_object_id(new stdClass));
var_dump(spl_object_id(42));
$a = new stdClass();
var_dump(spl_object_id(new stdClass) === spl_object_id($a));

?>
--EXPECTF--
int(%d)

Warning: spl_object_id() expects parameter 1 to be object, integer given in %sspl_object_id.php on line %d
NULL
bool(false)
