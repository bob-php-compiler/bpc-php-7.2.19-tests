--TEST--
Bug #44327 (PDORow::queryString property & numeric offsets / Crash)
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
$db = MySQLPDOTest::factory();
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();

	$stmt = $db->prepare("SELECT 1 AS \"one\"");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_LAZY);
	var_dump($row);
	var_dump($row->{0});
	var_dump($row->one);
	var_dump($row->queryString);

	print "----------------------------------\n";

	@$db->exec("DROP TABLE test");
	$db->exec("CREATE TABLE test (id INT)");
	$db->exec("INSERT INTO test(id) VALUES (1)");
	$stmt = $db->prepare("SELECT id FROM test");
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_LAZY);
	var_dump($row);
	var_dump($row->queryString);
	@$db->exec("DROP TABLE test");

	print "----------------------------------\n";

	$stmt = $db->prepare('foo');
	@$stmt->execute();
	$row = $stmt->fetch();
	var_dump($row->queryString);

?>
--EXPECTF--
object(PDORow)#%d (2) {
  ["queryString"]=>
  string(17) "SELECT 1 AS "one""
  ["one"]=>
  string(1) "1"
}
string(1) "1"
string(1) "1"
string(17) "SELECT 1 AS "one""
----------------------------------
object(PDORow)#%d (2) {
  ["queryString"]=>
  string(19) "SELECT id FROM test"
  ["id"]=>
  string(1) "1"
}
string(19) "SELECT id FROM test"
----------------------------------

Notice: Trying to get property 'queryString' of non-object in %s on line %d
NULL
