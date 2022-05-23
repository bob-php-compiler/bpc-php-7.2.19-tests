--TEST--
PDO MySQL national character set parameters don't affect true prepared statements
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc \
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

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);

$db->exec('CREATE TABLE test (bar NCHAR(4) NOT NULL)');

$stmt = $db->prepare('INSERT INTO test VALUES(?)');
$stmt->bindValue(1, 'foo', PDO::PARAM_STR | PDO::PARAM_STR_NATL);
$stmt->execute();

var_dump($db->query('SELECT * from test'));
foreach ($db->query('SELECT * from test') as $row) {
	print_r($row);
}

?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
MySQLPDOTest::dropTestTable();
?>
--EXPECTF--
object(PDOStatement)#%d (1) {
  ["queryString"]=>
  string(18) "SELECT * from test"
}
Array
(
    [bar] => foo
    [0] => foo
)
