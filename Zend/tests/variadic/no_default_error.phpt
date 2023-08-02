--TEST--
Variadic argument cannot have a default value
--FILE--
<?php

function test(...$args = 123) {}

?>
--EXPECTF--
Parse error: (unexpected token `equals') in %s on line %d
