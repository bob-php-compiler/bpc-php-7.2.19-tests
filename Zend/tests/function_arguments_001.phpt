--TEST--
Argument parsing error #001
--FILE--
<?php
function foo($arg1 string) {}
?>
--EXPECTF--
Parse error: %s in %sfunction_arguments_001.php on line %d
