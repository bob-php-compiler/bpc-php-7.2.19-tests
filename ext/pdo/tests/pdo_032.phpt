--TEST--
PDO Common: PDO::ATTR_CASE
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();

$db->exec('CREATE TABLE test(id int NOT NULL PRIMARY KEY, val VARCHAR(10))');
$db->exec("INSERT INTO test VALUES(1, 'A')");
$db->exec("INSERT INTO test VALUES(2, 'B')");
$db->exec("INSERT INTO test VALUES(3, 'C')");

// Lower case columns
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
$stmt = $db->prepare('SELECT * from test');
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$stmt->closeCursor();

// Upper case columns
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
$stmt = $db->prepare('SELECT * from test');
$stmt->execute();
var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
$stmt->closeCursor();

?>
--EXPECT--
array(3) {
  [0]=>
  array(2) {
    ["id"]=>
    string(1) "1"
    ["val"]=>
    string(1) "A"
  }
  [1]=>
  array(2) {
    ["id"]=>
    string(1) "2"
    ["val"]=>
    string(1) "B"
  }
  [2]=>
  array(2) {
    ["id"]=>
    string(1) "3"
    ["val"]=>
    string(1) "C"
  }
}
array(3) {
  [0]=>
  array(2) {
    ["ID"]=>
    string(1) "1"
    ["VAL"]=>
    string(1) "A"
  }
  [1]=>
  array(2) {
    ["ID"]=>
    string(1) "2"
    ["VAL"]=>
    string(1) "B"
  }
  [2]=>
  array(2) {
    ["ID"]=>
    string(1) "3"
    ["VAL"]=>
    string(1) "C"
  }
}
