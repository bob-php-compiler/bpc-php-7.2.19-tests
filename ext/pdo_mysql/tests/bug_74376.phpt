--TEST--
Bug #74376 (Invalid free of persistent results on error/connection loss)
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

$attr = getenv('PDOTEST_ATTR');
$attr = $attr ? unserialize($attr) : array();
$attr[PDO::ATTR_PERSISTENT] = true;
$attr[PDO::ATTR_EMULATE_PREPARES] = false;

putenv('PDOTEST_ATTR=' . serialize($attr));

$db = MySQLPDOTest::factory();
$stmt = $db->query("select (select 1 union select 2)");

print "ok";
?>
--EXPECTF--
ok
