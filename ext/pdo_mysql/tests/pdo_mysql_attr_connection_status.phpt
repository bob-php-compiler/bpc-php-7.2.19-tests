--TEST--
PDO::ATTR_CONNECTION_STATUS
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

	$status = $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
	if (ini_get('unicode.semantics')) {
		if (!is_unicode($status))
			printf("[001] Expecting unicode, got '%s'\n", var_export($status, true));
	} else {
		if (!is_string($status))
			printf("[002] Expecting string, got '%s'\n", var_export($status, true));
	}

	if ('' == $status)
		printf("[003] Connection status string must not be empty\n");

	if (false !== $db->setAttribute(PDO::ATTR_CONNECTION_STATUS, 'my own connection status'))
		printf("[004] Changing read only attribute\n");

	$status2 = $db->getAttribute(PDO::ATTR_CONNECTION_STATUS);
	if ($status !== $status2)
		printf("[005] Connection status should not have changed\n");

	print "done!";
?>
--EXPECTF--
done!
