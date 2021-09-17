--TEST--
Error message for isset(func())
--FILE--
<?php
isset(1 + 1);
?>
--EXPECTF--
Parse error: %s in %s on line %d
