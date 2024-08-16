--TEST--
Constant expressions with empty dimension fetch on coalesce
--FILE--
<?php

define('A', [][] ?? 1);

?>
--EXPECTF--
Parse error: (unexpected token `rbrak') in %s on line %d
