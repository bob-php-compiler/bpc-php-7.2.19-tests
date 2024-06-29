--TEST--
Positional arguments cannot be used after argument unpacking
--FILE--
<?php

var_dump(...[1, 2, 3], 4);

?>
--EXPECTF--
Parse error: (unexpected token `integer') in %s on line %d
