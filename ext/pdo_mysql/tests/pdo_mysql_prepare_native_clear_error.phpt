--TEST--
MySQL PDO->prepare(), native PS, clear line after error
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

	try {

		$db->exec('DROP TABLE IF EXISTS test');
		$db->exec(sprintf('CREATE TABLE test(id INT, label CHAR(255)) ENGINE=%s', PDO_MYSQL_TEST_ENGINE));

		// We need to run the emulated version first. Native version will cause a fatal error
		$db->setAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY, 1);
		if (1 != $db->getAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY))
			printf("[002] Unable to turn on emulated prepared statements\n");

		// INSERT a single row
		$db->exec("INSERT INTO test(id, label) VALUES (1, 'row1')");

		$stmt = $db->prepare('SELECT unknown_column FROM test WHERE id > :placeholder ORDER BY id ASC');
		$stmt->execute(array(':placeholder' => 0));
		if ('00000' !== $stmt->errorCode())
			printf("[003] Execute has failed, %s %s\n",
				var_export($stmt->errorCode(), true),
				var_export($stmt->errorInfo(), true));

		$stmt = $db->prepare('SELECT id, label FROM test WHERE id > :placeholder ORDER BY id ASC');
		$stmt->execute(array(':placeholder' => 0));
		if ('00000' !== $stmt->errorCode())
			printf("[004] Execute has failed, %s %s\n",
				var_export($stmt->errorCode(), true),
				var_export($stmt->errorInfo(), true));
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		// Native PS
		$db->setAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY, 0);
		if (0 != $db->getAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY))
			printf("[005] Unable to turn off emulated prepared statements\n");

		$stmt = $db->prepare('SELECT unknown_column FROM test WHERE id > :placeholder ORDER BY id ASC');
		$stmt->execute(array(':placeholder' => 0));
		if ('00000' !== $stmt->errorCode())
			printf("[006] Execute has failed, %s %s\n",
				var_export($stmt->errorCode(), true),
				var_export($stmt->errorInfo(), true));

		$stmt = $db->prepare('SELECT id, label FROM test WHERE id > :placeholder ORDER BY id ASC');
		$stmt->execute(array(':placeholder' => 0));
		if ('00000' !== $stmt->errorCode())
			printf("[007] Execute has failed, %s %s\n",
				var_export($stmt->errorCode(), true),
				var_export($stmt->errorInfo(), true));
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));


	} catch (PDOException $e) {
		printf("[001] %s [%s] %s\n",
			$e->getMessage(), $db->errorCode(), implode(' ', $db->errorInfo()));
	}

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
$db = MySQLPDOTest::factory();
$db->exec('DROP TABLE IF EXISTS test');
?>
--EXPECTF--
Warning: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'unknown_column' in 'field list' in %s on line %d
[003] Execute has failed, '42S22' array (
  0 => '42S22',
  1 => 1054,
  2 => 'Unknown column \'unknown_column\' in \'field list\'',
)
array(1) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["label"]=>
    string(4) "row1"
  }
}

Warning: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'unknown_column' in 'field list' in %s on line %d

Fatal error: Uncaught Error: Call to a member function execute() on boolean in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
