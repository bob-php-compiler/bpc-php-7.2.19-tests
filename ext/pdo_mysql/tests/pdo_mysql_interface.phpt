--TEST--
MySQL PDO class interface
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
$db = MySQLPDOTest::factory();
if (false == MySQLPDOTest::detect_transactional_mysql_engine($db))
	die("skip Transactional engine not found");
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();

	$expected = array(
		'__construct'							=> true,
		'closeConnection' => true,
		'prepare' 							=> true,
		'beginTransaction'						=> true,
		'commit'							=> true,
		'rollBack'							=> true,
		'setAttribute'							=> true,
		'exec'								=> true,
		'query'								=> true,
		'lastInsertId'							=> true,
		'errorCode'							=> true,
		'errorInfo'							=> true,
		'getAttribute'							=> true,
		'quote'								=> true,
		'inTransaction'							=> true,
		'__wakeup'							=> true,
		'__sleep'							=> true,
		'getAvailableDrivers'	=> true,
	);
	$classname = get_class($db);

	$methods = get_class_methods($classname);
	foreach ($methods as $k => $method) {
		if (isset($expected[$method])) {
			unset($expected[$method]);
			unset($methods[$k]);
		}
		if ($method == $classname) {
			unset($expected['__construct']);
			unset($methods[$k]);
		}
	}
	if (!empty($expected)) {
		printf("Dumping missing class methods\n");
		var_dump($expected);
	}
	if (!empty($methods)) {
		printf("Found more methods than expected, dumping list\n");
		var_dump($methods);
	}

	print "done!";
--EXPECT--
done!
