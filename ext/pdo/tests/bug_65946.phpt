--TEST--
PDO Common: Bug #65946 (pdo_sql_parser.c permanently converts values bound to strings)
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
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$db->exec('CREATE TABLE test(id int)');
$db->exec('INSERT INTO test VALUES(1)');
switch ($db->getAttribute(PDO::ATTR_DRIVER_NAME)) {
	case 'dblib':
		$sql = 'SELECT TOP :limit * FROM test';
		break;
	case 'odbc':
		$sql = 'SELECT TOP (:limit) * FROM test';
		break;
	case 'firebird':
		$sql = 'SELECT FIRST :limit * FROM test';
		break;
	case 'oci':
		//$sql = 'SELECT * FROM test FETCH FIRST :limit ROWS ONLY';  // Oracle 12c syntax
		$sql = "select id from (select a.*, rownum rnum from (SELECT * FROM test) a where rownum <= :limit)";
		break;
	default:
		$sql = 'SELECT * FROM test LIMIT :limit';
		break;
}
$stmt = $db->prepare($sql);
$stmt->bindValue('limit', 1, PDO::PARAM_INT);
if(!($res = $stmt->execute())) var_dump($stmt->errorInfo());
if(!($res = $stmt->execute())) var_dump($stmt->errorInfo());
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
?>
--EXPECTF--
array(1) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "1"
  }
}
