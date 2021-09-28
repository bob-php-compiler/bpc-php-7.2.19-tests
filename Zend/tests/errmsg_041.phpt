--TEST--
errmsg: instanceof expects an object instance, constant given
--FILE--
<?php

var_dump("abc" instanceof stdclass);

echo "Done\n";
?>
--EXPECTF--
Parse error: instanceof expects an object instance, literal-string given in %s on line %d
