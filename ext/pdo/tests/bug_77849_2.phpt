--TEST--
PDO Common: Bug #77849 (inconsistent state of cloned statament object)
--SKIPIF--
<?php
if (!extension_loaded('pdo')) die('skip');
?>
--FILE--
<?php
$stmt = new PDOStatement();

clone $stmt;
?>
--EXPECTF--
Fatal error: Uncaught Error: Trying to clone an uncloneable object of class PDOStatement in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d

