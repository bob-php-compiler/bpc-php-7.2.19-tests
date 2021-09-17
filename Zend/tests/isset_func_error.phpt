--TEST--
Error message for isset(func())
--FILE--
<?php
isset(abc());
?>
--EXPECTF--
Parse error: %s in %s on line %d
