--TEST--
MySQL PDO->errorCode()
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

	function check_error($offset, &$obj, $expected = '00000') {

		$code = $obj->errorCode();
		if (($code != $expected) && (($expected != '00000') && ($code != ''))) {
			printf("[%03d] Expecting error code '%s' got code '%s'\n",
				$offset, $expected, $code);
		}

	}

	try {

		/*
		If you create a PDOStatement object through PDO->prepare()
		or PDO->query() and invoke an error on the statement handle,
		PDO->errorCode() will not reflect that error. You must call
		PDOStatement->errorCode() to return the error code for an
		operation performed on a particular statement handle.
		*/
		$code = $db->errorCode();
		check_error(2, $db);

		$stmt = $db->query('SELECT id, label FROM test');
		$stmt2 = &$stmt;
		check_error(3, $db);
		check_error(4, $stmt);

		$db->exec('DROP TABLE IF EXISTS test');
		@$stmt->execute();
		check_error(4, $db);
		check_error(5, $stmt, '42S02');
		check_error(6, $stmt2, '42S02');

		$db->exec('DROP TABLE IF EXISTS unknown');
		@$stmt = $db->query('SELECT id, label FROM unknown');
		check_error(7, $db, '42S02');

		MySQLPDOTest::createTestTable($db);
		$stmt = $db->query('SELECT id, label FROM test');
		check_error(8, $db);
		check_error(9, $stmt);

		$db2 = &$db;
		@$db->query('SELECT id, label FROM unknown');
		check_error(10, $db, '42S02');
		check_error(11, $db2, '42S02');
		check_error(12, $stmt);
		check_error(13, $stmt2);

		// lets hope this is an invalid attribute code
		$invalid_attr = -1 * PHP_INT_MAX + 3;
		$tmp = @$db->getAttribute($invalid_attr);
		check_error(14, $db, 'IM001');
		check_error(15, $db2, 'IM001');
		check_error(16, $stmt);
		check_error(17, $stmt2);

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
