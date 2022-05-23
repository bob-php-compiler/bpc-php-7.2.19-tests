--TEST--
Bug #43371 (Memory errors in PDO constructor)
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

$dsn = MySQLPDOTest::getDSN();
$db = new PDO($dsn, PDO_MYSQL_TEST_USER, PDO_MYSQL_TEST_PASS, array(PDO::ATTR_PERSISTENT => true));

print "done!";
?>
--EXPECT--
done!
