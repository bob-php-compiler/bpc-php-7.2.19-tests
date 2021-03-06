--TEST--
PDO MySQL Bug #75177 Type 'bit' is fetched as unexpected string
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
$pdo = MySQLPDOTest::factory();

$tbl = "tbl_bug75177";
$pdo->query("DROP TABLE IF EXISTS $tbl");
$pdo->query("CREATE TABLE $tbl (`bit` bit(8)) ENGINE=InnoDB");
$pdo->query("INSERT INTO $tbl (`bit`) VALUES (1)");
$pdo->query("INSERT INTO $tbl (`bit`) VALUES (0b011)");
$pdo->query("INSERT INTO $tbl (`bit`) VALUES (0b01100)");

$ret = $pdo->query("SELECT * FROM $tbl")->fetchAll();

foreach ($ret as $i) {
	var_dump($i["bit"]);
}

?>
==DONE==
--EXPECT--
string(1) ""
string(1) ""
string(1) ""
==DONE==
