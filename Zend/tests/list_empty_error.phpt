--TEST--
Empty list() assignments are not allowed
--FILE--
<?php

list(,,,,,,,,,,) = array();

?>
--EXPECTF--
Parse error: %s in %s on line %d
