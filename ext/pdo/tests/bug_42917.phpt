--TEST--
PDO Common: Bug #42917 (PDO::FETCH_KEY_PAIR doesn't work with setFetchMode)
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

$db->exec("CREATE TABLE test (a varchar(100), b varchar(100), c varchar(100))");

for ($i = 0; $i < 5; $i++) {
	$db->exec("INSERT INTO test (a,b,c) VALUES('test".$i."','".$i."','".$i."')");
}

$res = $db->query("SELECT a,b FROM test");
$res->setFetchMode(PDO::FETCH_KEY_PAIR);
var_dump($res->fetchAll());

?>
--EXPECT--
array(5) {
  ["test0"]=>
  string(1) "0"
  ["test1"]=>
  string(1) "1"
  ["test2"]=>
  string(1) "2"
  ["test3"]=>
  string(1) "3"
  ["test4"]=>
  string(1) "4"
}
