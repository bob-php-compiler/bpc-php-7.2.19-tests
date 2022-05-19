--TEST--
PDO Common: PDO::FETCH_LAZY
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

$db->exec('create table test (id int, name varchar(10))');
$db->exec("INSERT INTO test (id,name) VALUES(1,'test1')");
$db->exec("INSERT INTO test (id,name) VALUES(2,'test2')");

foreach ($db->query("SELECT * FROM test", PDO::FETCH_LAZY) as $v) {
	echo "lazy: " . $v->id.$v->name."\n";
}
echo "End\n";
?>
--EXPECT--
lazy: 1test1
lazy: 2test2
End
