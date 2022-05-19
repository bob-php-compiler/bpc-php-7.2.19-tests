--TEST--
PDO Common: Bug #36798 (Error parsing named parameters with queries containing high-ascii chars)
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();

if (!strncasecmp(getenv('PDOTEST_DSN'), 'oci', strlen('oci'))){
    if (!strpos(strtolower(getenv('PDOTEST_DSN')), 'charset=we8mswin1252')) die('skip expected output valid for Oracle with WE8MSWIN1252 character set');

}

?>
--FILE--
<?php

require_once 'pdo_test.inc';
$db = PDOTest::factory();

@$db->exec("SET NAMES 'LATIN1'"); // needed for PostgreSQL
$db->exec("CREATE TABLE test (id INTEGER)");
$db->exec("INSERT INTO test (id) VALUES (1)");

$stmt = $db->prepare("SELECT 'Ã' as test FROM test WHERE id = :id");
$stmt->execute(array(":id" => 1));

$row = $stmt->fetch(PDO::FETCH_NUM);
var_dump( $row );

?>
--EXPECT--
array(1) {
  [0]=>
  string(1) "Ã"
}
