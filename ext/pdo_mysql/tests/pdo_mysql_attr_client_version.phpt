--TEST--
PDO::ATTR_CLIENT_VERSION
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

	if (('' != $db->errorCode()) && ('00000' != $db->errorCode())) {
	    die('expect no error');
	}

	$version = $db->getAttribute(PDO::ATTR_CLIENT_VERSION);

	// No more constraints - mysqlnd and libmysql return different strings at least
	// with mysqli. Return type check is already performed in the generic test.
	// According to the manual we should get an int but as of today we do get a string...
	if ('' == $version)
		printf("[001] Client version must not be empty\n");


	// Read-only
	if (false !== $db->setAttribute(PDO::ATTR_CLIENT_VERSION, '1.0'))
		printf("[002] Wonderful, I can change the client version!\n");

	$new_version = $db->getAttribute(PDO::ATTR_CLIENT_VERSION);
	if ($new_version !== $version)
		printf("[003] Did we change it from '%s' to '%s'?\n", $version, $new_version);

	print "done!";
?>
--EXPECTF--
done!
