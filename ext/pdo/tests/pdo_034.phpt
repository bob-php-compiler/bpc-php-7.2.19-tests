--TEST--
PDO Common: PDO::FETCH_KEY_PAIR fetch mode test
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

var_dump($db->query("SELECT a,b FROM test")->fetch(PDO::FETCH_KEY_PAIR));
var_dump($db->query("SELECT a,b FROM test")->fetchAll(PDO::FETCH_KEY_PAIR));
var_dump($db->query("SELECT * FROM test")->fetch(PDO::FETCH_KEY_PAIR));
var_dump($db->query("SELECT a,a FROM test")->fetchAll(PDO::FETCH_KEY_PAIR));

?>
--EXPECTF--
array(1) {
  ["test0"]=>
  string(1) "0"
}
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

Warning: SQLSTATE[HY000]: General error: PDO::FETCH_KEY_PAIR fetch mode requires the result set to contain extactly 2 columns. in %spdo_034.php on line %d

Warning: SQLSTATE[HY000]: General error%spdo_034.php on line %d
bool(false)
array(5) {
  ["test0"]=>
  string(5) "test0"
  ["test1"]=>
  string(5) "test1"
  ["test2"]=>
  string(5) "test2"
  ["test3"]=>
  string(5) "test3"
  ["test4"]=>
  string(5) "test4"
}
