--TEST--
PDO Common: Bug #39656 (Crash when calling fetch() on a PDO statement object after closeCursor())
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
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

@$db->exec("DROP TABLE test");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec("CREATE TABLE test (id INTEGER NOT NULL PRIMARY KEY, usr VARCHAR( 256 ) NOT NULL)");
$db->exec("INSERT INTO test (id, usr) VALUES (1, 'user')");

$stmt = $db->prepare("SELECT * FROM test WHERE id = ?");
$stmt->bindValue(1, 1, PDO::PARAM_INT );
$stmt->execute();
$row = $stmt->fetch();
var_dump( $row );

$stmt->execute();
$stmt->closeCursor();
$row = $stmt->fetch(); // this line will crash CLI
var_dump( $row );

@$db->exec("DROP TABLE test");
echo "Done\n";
?>
--EXPECT--
array(4) {
  ["id"]=>
  string(1) "1"
  [0]=>
  string(1) "1"
  ["usr"]=>
  string(4) "user"
  [1]=>
  string(4) "user"
}
bool(false)
Done
