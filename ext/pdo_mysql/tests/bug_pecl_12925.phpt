--TEST--
PDO MySQL PECL bug #1295 (http://pecl.php.net/bugs/bug.php?id=12925)
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
$db = MySQLPDOTest::factory();
?>
--FILE--
<?php
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
$db = MySQLPDOTest::factory();

function bug_pecl_1295($db) {

	$db->exec('DROP TABLE IF EXISTS test');
	$db->exec('CREATE TABLE test(id CHAR(1))');
	$db->exec("INSERT INTO test(id) VALUES ('a')");
	$stmt = $db->prepare("UPDATE test SET id = 'b'");
	$stmt->execute();
	$stmt = $db->prepare("UPDATE test SET id = 'c'");
	$stmt->execute();
	$stmt = $db->prepare('SELECT id FROM test');
	$stmt->execute();
	var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
	$stmt->closeCursor();

}

printf("Emulated...\n");
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);
bug_pecl_1295($db);

printf("Native...\n");
$db = MySQLPDOTest::factory();
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
bug_pecl_1295($db);

$db->exec('DROP TABLE IF EXISTS test');
print "done!";
?>
--EXPECTF--
Emulated...
array(1) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "c"
  }
}
Native...
array(1) {
  [0]=>
  array(1) {
    ["id"]=>
    string(1) "c"
  }
}
done!
