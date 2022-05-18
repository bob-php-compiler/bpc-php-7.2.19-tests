--TEST--
Bug #51670 (getColumnMeta causes segfault when re-executing query after calling nextRowset)
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
$query = $db->prepare('SELECT 1 AS num');
$query->execute();
if(!is_array($query->getColumnMeta(0))) die('FAIL!');
$query->nextRowset();
$query->execute();
if(!is_array($query->getColumnMeta(0))) die('FAIL!');
echo 'done!';
?>
--EXPECTF--
done!
