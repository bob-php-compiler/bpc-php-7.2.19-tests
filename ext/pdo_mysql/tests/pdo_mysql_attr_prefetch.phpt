--TEST--
PDO::ATTR_PREFETCH
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
	var_dump($db->getAttribute(PDO::ATTR_PREFETCH));
	var_dump($db->setAttribute(PDO::ATTR_PREFETCH, true));
	print "done!";
--EXPECTF--
Warning: SQLSTATE[IM001]: Driver does not support this function: driver does not support that attribute in %s on line %d
bool(false)
bool(false)
done!
