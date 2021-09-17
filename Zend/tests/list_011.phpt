--TEST--
Disallow list() usage as if it were an array
--FILE--
<?php

var_dump(list(1, 2, 3));

?>
--EXPECTF--
Parse error: %s in %s on line %d
