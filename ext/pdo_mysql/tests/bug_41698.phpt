--TEST--
PDO MySQL Bug #41698 (float parameters truncated to integer in prepared statements)
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip not loaded');
require 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

setlocale(LC_ALL, "de","de_DE","de_DE.ISO8859-1","de_DE.ISO_8859-1","de_DE.UTF-8");

$db->exec('CREATE TABLE test(floatval DECIMAL(8,6))');
$db->exec('INSERT INTO test VALUES(2.34)');
$value=4.56;
$stmt = $db->prepare('INSERT INTO test VALUES(?)');
$stmt->execute(array($value));
var_dump($db->query('SELECT * from test')->fetchAll(PDO::FETCH_ASSOC));
?>
--EXPECTF--
array(2) {
  [0]=>
  array(1) {
    ["floatval"]=>
    string(8) "2.340000"
  }
  [1]=>
  array(1) {
    ["floatval"]=>
    string(8) "4.560000"
  }
}
