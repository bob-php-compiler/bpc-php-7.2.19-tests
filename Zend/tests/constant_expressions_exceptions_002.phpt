--TEST--
Constant Expressions with unsupported operands 002
--ARGS--
--bpc-include-file Zend/tests/constant_expressions_exceptions.inc \
--FILE--
<?php
try {
	require("constant_expressions_exceptions.inc");
} catch (Error $e) {
	echo "\nException: " . $e->getMessage() . " in " , $e->getFile() . " on line " . $e->getLine() . "\n";
}
?>
DONE
--EXPECTF--
Parse error: Unsupported operand types in %sconstant_expressions_exceptions.inc on line 2
