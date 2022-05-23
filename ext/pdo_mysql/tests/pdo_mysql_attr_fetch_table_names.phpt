--TEST--
PDO::ATTR_FETCH_TABLE_NAMES
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();
	MySQLPDOTest::createTestTable($db);

	$db->setAttribute(PDO::ATTR_FETCH_TABLE_NAMES, 1);
	$stmt = $db->query('SELECT label FROM test LIMIT 1');
	var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
	$stmt->closeCursor();

	$db->setAttribute(PDO::ATTR_FETCH_TABLE_NAMES, 0);
	$stmt = $db->query('SELECT label FROM test LIMIT 1');
	var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
	$stmt->closeCursor();

	print "done!";
?>
--EXPECTF--
array(1) {
  [0]=>
  array(1) {
    ["test.label"]=>
    string(1) "a"
  }
}
array(1) {
  [0]=>
  array(1) {
    ["label"]=>
    string(1) "a"
  }
}
done!
