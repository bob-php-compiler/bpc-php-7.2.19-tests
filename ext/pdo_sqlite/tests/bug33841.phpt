--TEST--
PDO SQLite Bug #33841 (rowCount() does not work on prepared statements)
--ARGS--
--bpc-include-file ext/pdo_sqlite/tests/config.inc --bpc-include-file ext/pdo_sqlite/tests/pdo_test.inc \
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

$db->exec('CREATE TABLE test (text)');

$stmt = $db->prepare("INSERT INTO test VALUES ( :text )");
$stmt->bindParam(':text', $name);
$name = 'test1';
var_dump($stmt->execute(), $stmt->rowCount());

$stmt = $db->prepare("UPDATE test SET text = :text ");
$stmt->bindParam(':text', $name);
$name = 'test2';
var_dump($stmt->execute(), $stmt->rowCount());
--EXPECT--
bool(true)
int(1)
bool(true)
int(1)
