--TEST--
PDO Common: PECL Bug #5772 (PDO::FETCH_FUNC breaks on mixed case func name)
--SKIPIF--
<?php # vim:ft=php:
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();

$db->exec("CREATE TABLE test (id int NOT NULL, PRIMARY KEY (id))");
$db->exec("INSERT INTO test (id) VALUES (1)");

function heLLO($row) {
	return $row;
}

foreach ($db->query("SELECT * FROM test")->fetchAll(PDO::FETCH_FUNC, 'heLLO') as $row) {
	var_dump($row);
}
--EXPECT--
string(1) "1"
