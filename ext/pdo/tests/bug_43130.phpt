--TEST--
PDO Common: Bug #43130 (Bound parameters cannot have - in their name)
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
if (!strncasecmp(getenv('PDOTEST_DSN'), 'sqlite', strlen('sqlite'))) die('skip not relevant for sqlite driver');
if (!strncasecmp(getenv('PDOTEST_DSN'), 'pgsql', strlen('pgsql'))) die('skip not relevant for pgsql driver');
if (!strncasecmp(getenv('PDOTEST_DSN'), 'oci', strlen('oci'))) die('skip not relevant for oci driver - Hyphen is not legal for bind names in Oracle DB');
if (!strncasecmp(getenv('PDOTEST_DSN'), 'firebird', strlen('firebird'))) die('skip not relevant for firebird driver');
if (!strncasecmp(getenv('PDOTEST_DSN'), 'odbc', strlen('odbc'))) die('skip not relevant for odbc driver');
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();

if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql')
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);

$db->exec("CREATE TABLE test (a varchar(100), b varchar(100), c varchar(100))");

for ($i = 0; $i < 5; $i++) {
	$db->exec("INSERT INTO test (a,b,c) VALUES('test".$i."','".$i."','".$i."')");
}

$stmt = $db->prepare("SELECT a FROM test WHERE b=:id-value");
$stmt->bindParam(':id-value', $id);
$id = '1';
$stmt->execute();
var_dump($stmt->fetch(PDO::FETCH_COLUMN));
?>
--EXPECTF--
Warning: SQLSTATE[HY093]: Invalid parameter number: parameter was not defined in %s on line %d

Warning: SQLSTATE[HY093]: Invalid parameter number in %s on line %d
bool(false)
