--TEST--
PDO MySQL Bug #39483 (Problem with handling of \ char in prepared statements)
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

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, TRUE);
$stmt = $db->prepare('SELECT UPPER(\'\0:D\0\'),?');
$stmt->execute(array(1));
var_dump($stmt->fetchAll(PDO::FETCH_NUM));
--EXPECT--
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(4) " :D "
    [1]=>
    string(1) "1"
  }
}
