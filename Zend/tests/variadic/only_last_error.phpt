--TEST--
Only the last argument can be variadic
--FILE--
<?php

function test($foo, ...$bar, $baz) {}

?>
--EXPECTF--
Parse error: (unexpected token `comma') in %s on line %d
