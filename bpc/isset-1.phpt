--TEST--
assigning tests
--FILE--
<?php

$o = new stdclass;
$a = array();
// php: Trying to get property 'foo' of non-object
// bpc: silent
var_dump(isset($a->{$a->foo}));
var_dump(isset($a->$a));
var_dump(isset($o->$a));

?>
--EXPECTF--
bool(false)
bool(false)

Notice: Array to string conversion in %s on line 9
bool(false)
