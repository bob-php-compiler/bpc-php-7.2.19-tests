--TEST--
MySQL PDO phpinfo() output
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

	ob_start();
	phpinfo();
	$tmp = ob_get_contents();
	ob_end_clean();

	/*	PDO Driver for MySQL, client library version => 6.0.3-alpha	*/
	$reg = 'Client API version.*' . preg_quote($db->getAttribute(PDO::ATTR_CLIENT_VERSION), '/');

	if (!preg_match("/$reg/", $tmp)) {
		printf("[001] Cannot find MySQL PDO driver line in phpinfo() output\n");
	}

	print "done!";
?>
--EXPECT--
done!
