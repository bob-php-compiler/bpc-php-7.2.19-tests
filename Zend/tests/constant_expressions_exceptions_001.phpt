--TEST--
Constant Expressions with unsupported operands 001
--FILE--
<?php
define('T', array(1,2) - array(0));
--EXPECTF--
Parse error: Unsupported operand types in %sconstant_expressions_exceptions_001.php on line 2
