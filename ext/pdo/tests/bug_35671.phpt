--TEST--
PDO Common: Bug #35671 (binding by name breakage)
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

$db->exec('CREATE TABLE test (field1 VARCHAR(32), field2 VARCHAR(32), field3 VARCHAR(32))');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$insert = $db->prepare("insert into test (field1, field2, field3) values (:value1, :value2, :value3)");

$parm = array(
	":value1" => 15,
	":value2" => 20,
	":value3" => 25
);

$insert->execute($parm);
$insert = null;

var_dump($db->query("SELECT * from test")->fetchAll(PDO::FETCH_ASSOC));

?>
--EXPECT--
array(1) {
  [0]=>
  array(3) {
    ["field1"]=>
    string(2) "15"
    ["field2"]=>
    string(2) "20"
    ["field3"]=>
    string(2) "25"
  }
}
