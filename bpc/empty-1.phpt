--TEST--
assigning tests
--FILE--
<?php

$o = new stdclass;
$a = array();
// php: Trying to get property 'foo' of non-object
// bpc: silent
var_dump(empty($a->{$a->foo}));
var_dump(empty($a->$a));
var_dump(empty($o->$a));

?>
--EXPECTF--
bool(true)
bool(true)

Notice: Array to string conversion in %s on line 9
bool(true)
