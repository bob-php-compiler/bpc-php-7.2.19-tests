--TEST--
MySQL PDO->prepare(), native PS, mixed, wired style
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

	$stmt = $db->query('DELETE FROM test');
	$stmt = $db->prepare('INSERT INTO test(id, label) VALUES (1, ?), (2, ?)');
	$stmt->execute(array('a', 'b'));
	$stmt = $db->prepare("SELECT id, label FROM test WHERE id = :placeholder AND label = (SELECT label AS 'SELECT' FROM test WHERE id = ?)");
	$stmt->execute(array(1, 1));
	var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
MySQLPDOTest::dropTestTable();
?>
--EXPECTF--
Warning: SQLSTATE[HY093]: Invalid parameter number: mixed named and positional parameters in %s on line %d

Warning: SQLSTATE[HY093]: Invalid parameter number in %s on line %d

Fatal error: Uncaught Error: Call to a member function execute() on boolean in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
