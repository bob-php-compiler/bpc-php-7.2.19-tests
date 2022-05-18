--TEST--
PDO MySQL Bug #37445 (Premature stmt object destruction)
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip not loaded');
require 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

$db->setAttribute(PDO :: ATTR_EMULATE_PREPARES, true);
$stmt = $db->prepare("SELECT 1");
$stmt->bindParam(':a', 'b');
?>
--EXPECTF--
Fatal error: Uncaught Error: Cannot pass parameter 2 by reference in %sbug_37445.php:%d
Stack trace:
#0 {main}
  thrown in %sbug_37445.php on line %d
