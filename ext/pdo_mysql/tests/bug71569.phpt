--TEST--
Bug #71569 (#70389 fix causes segmentation fault)
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
require(dirname(__FILE__). DIRECTORY_SEPARATOR . 'config.inc');

try {
    new PDO(PDO_MYSQL_TEST_DSN, PDO_MYSQL_TEST_USER, PDO_MYSQL_TEST_PASS, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => null,
    ));
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
--EXPECT--
SQLSTATE[42000] [1065] Query was empty
