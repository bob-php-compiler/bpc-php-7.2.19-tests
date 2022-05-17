--TEST--
PDO Common: Bug #77849 (Unexpected segfault attempting to use cloned PDO object)
--SKIPIF--
<?php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';

$db = PDOTest::factory();
$db2 = clone $db;
?>
--EXPECTF--
Fatal error: Uncaught Error: Trying to clone an uncloneable object of class PDO in %s
Stack trace:
#0 {main}
  thrown in %s on line %d
