--TEST--
Global keyword only accepts simple variables
--FILE--
<?php

global $$foo->bar;

?>
--EXPECTF--
Parse error: %s in %s on line %d
