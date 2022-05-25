--TEST--
MySQL PDO->prepare(), native PS, named placeholder
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
	MySQLPDOTest::createTestTable($db);

	$db->setAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY, 0);
	if (0 != $db->getAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY))
		printf("[002] Unable to turn off emulated prepared statements\n");

	$stmt = $db->prepare("SELECT :param FROM test ORDER BY id ASC LIMIT 1");
	$stmt->execute(array(':param' => 'id'));
	var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

	$db->prepare('SELECT :placeholder FROM test WHERE :placeholder > :placeholder');
	$stmt->execute(array(':placeholder' => 'test'));

	var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
$db = MySQLPDOTest::factory();
$db->exec('DROP TABLE IF EXISTS test');
?>
--EXPECTF--
array(1) {
  [0]=>
  array(1) {
    ["?"]=>
    string(2) "id"
  }
}

Warning: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in %s on line %d
array(0) {
}
done!
