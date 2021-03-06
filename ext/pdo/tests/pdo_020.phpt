--TEST--
PDO Common: PDOStatement::columnCount
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

$db->exec('CREATE TABLE test(id INT NOT NULL PRIMARY KEY, val VARCHAR(10), val2 VARCHAR(16))');
$db->exec("INSERT INTO test VALUES(1, 'A', 'A')");
$db->exec("INSERT INTO test VALUES(2, 'B', 'B')");
$db->exec("INSERT INTO test VALUES(3, 'C', 'C')");

foreach (array('SELECT id, val FROM test', 'SELECT id, val, val2 FROM test', 'SELECT COUNT(*) FROM test') as $sql) {

	$stmt = $db->query($sql);
	$res = $stmt->columnCount();
    echo "Counted $res columns after $sql.\n";
	$stmt = null;
}

?>
--EXPECT--
Counted 2 columns after SELECT id, val FROM test.
Counted 3 columns after SELECT id, val, val2 FROM test.
Counted 1 columns after SELECT COUNT(*) FROM test.
