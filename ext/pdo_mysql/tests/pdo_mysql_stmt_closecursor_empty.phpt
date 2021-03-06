--TEST--
MySQL PDOStatement->closeCursor()
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


	try {

		$db->setAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY, 0);
		if (0 != $db->getAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY))
			printf("[002] Unable to turn off emulated prepared statements\n");

		$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
		MySQLPDOTest::createTestTable($db);

		$stmt = $db->prepare('SELECT id, label FROM test WHERE id > ? ORDER BY id ASC LIMIT 2');
		$in = 0;
		if (!$stmt->bindParam(1, $in))
			printf("[003] Cannot bind parameter, %s %s\n",
				$stmt->errorCode(), var_export($stmt->errorInfo(), true));

		$stmt->execute();
		$id = $label = null;

		if (!$stmt->bindColumn(1, $id, PDO::PARAM_INT))
			printf("[004] Cannot bind integer column, %s %s\n",
				$stmt->errorCode(), var_export($stmt->errorInfo(), true));

		if (!$stmt->bindColumn(2, $label, PDO::PARAM_STR))
			printf("[005] Cannot bind string column, %s %s\n",
				$stmt->errorCode(), var_export($stmt->errorInfo(), true));

		while ($stmt->fetch(PDO::FETCH_BOUND))
			printf("in = %d -> id = %s (%s) / label = %s (%s)\n",
				$in,
				var_export($id, true), gettype($id),
				var_export($label, true), gettype($label));

		$stmt->closeCursor();
		$stmt->execute();
		while ($stmt->fetch(PDO::FETCH_BOUND))
			printf("in = %d -> id = %s (%s) / label = %s (%s)\n",
				$in,
				var_export($id, true), gettype($id),
				var_export($label, true), gettype($label));

	} catch (PDOException $e) {
		printf("[001] %s [%s] %s\n",
			$e->getMessage(), $db->errorCode(), implode(' ', $db->errorInfo()));
	}

	$db->exec('DROP TABLE IF EXISTS test');
	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
MySQLPDOTest::dropTestTable();
?>
--EXPECTF--
in = 0 -> id = 1 (integer) / label = 'a' (string)
in = 0 -> id = 2 (integer) / label = 'b' (string)
in = 0 -> id = 1 (integer) / label = 'a' (string)
in = 0 -> id = 2 (integer) / label = 'b' (string)
done!
