--TEST--
PDO Common: Bug #36428 (Incorrect error message for PDO::fetchAll())
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
if (!extension_loaded('simplexml')) die('skip SimpleXML not loaded');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';

$db = PDOTest::factory();
$db->exec("CREATE TABLE test (a VARCHAR(10))");
$db->exec("INSERT INTO test (a) VALUES ('xyz')");
$res = $db->query("SELECT a FROM test");
var_dump($res->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'SimpleXMLElement', array('<root/>')));

?>
===DONE===
--EXPECTF--
array(1) {
  [0]=>
  object(SimpleXMLElement)#%d (1) {
    ["a"]=>
    string(3) "xyz"
  }
}
===DONE===
