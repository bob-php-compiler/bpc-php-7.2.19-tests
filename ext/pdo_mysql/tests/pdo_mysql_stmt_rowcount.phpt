--TEST--
MySQL PDOStatement->rowCount() @ SELECT
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

	try {

		if (0 !== ($tmp = $db->query('SELECT id FROM test WHERE 1 = 0')->rowCount()))
			printf("[002] Expecting 0 got %s", var_export($tmp, true));

		if (1 !== ($tmp = $db->query('SELECT id FROM test WHERE id = 1')->rowCount()))
			printf("[003] Expecting 1 got %s", var_export($tmp, true));

	} catch (PDOException $e) {
		printf("[001] %s [%s] %s\n",
			$e->getMessage(), $db->errorCode(), implode(' ', $db->errorInfo()));
	}

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
MySQLPDOTest::dropTestTable();
?>
--EXPECTF--
done!
