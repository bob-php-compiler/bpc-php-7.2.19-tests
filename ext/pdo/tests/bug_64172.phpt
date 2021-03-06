--TEST--
PDO Common: Bug #64172 errorInfo is not properly cleaned up
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';

$db = PDOTest::factory();

@$db->exec("DROP TABLE test");
$db->exec("CREATE TABLE test (x int)");
$db->exec("INSERT INTO test VALUES (1)");

echo "===FAIL===\n";
$db->query('SELECT * FROM bad_table');
echo "\n";
echo "===TEST===\n";
var_dump(is_string($db->errorInfo()[0])) . "\n";
var_dump(is_int($db->errorInfo()[1])) . "\n";
var_dump(is_string($db->errorInfo()[2])) . "\n";
echo "===GOOD===\n";
$stmt = $db->query('SELECT * FROM test');
$stmt->fetchAll();
$stmt = null;
var_dump($db->errorInfo());

echo "===FAIL===\n";
$db->exec("INSERT INTO bad_table VALUES(1)");
echo "\n";
echo "===TEST===\n";
var_dump(is_string($db->errorInfo()[0])) . "\n";
var_dump(is_int($db->errorInfo()[1])) . "\n";
var_dump(is_string($db->errorInfo()[2])) . "\n";
echo "===GOOD===\n";
$db->exec("INSERT INTO test VALUES (2)");
var_dump($db->errorInfo());

$db->exec("DROP TABLE test");
?>
===DONE===
--EXPECTF--
===FAIL===

Warning: SQLSTATE[%s]: %s
%A
===TEST===
bool(true)
bool(true)
bool(true)
===GOOD===
array(3) {
  [0]=>
  string(5) "00000"
  [1]=>
  NULL
  [2]=>
  NULL
}
===FAIL===

Warning: SQLSTATE[%s]: %s
%A
===TEST===
bool(true)
bool(true)
bool(true)
===GOOD===
array(3) {
  [0]=>
  string(5) "00000"
  [1]=>
  NULL
  [2]=>
  NULL
}
===DONE===
