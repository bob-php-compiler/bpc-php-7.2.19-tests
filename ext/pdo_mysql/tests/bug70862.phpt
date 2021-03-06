--TEST--
MySQL Prepared Statements and BLOBs
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
die('skip not support streamWrapper');
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();

	$db->exec('DROP TABLE IF EXISTS test');
	$db->exec(sprintf('CREATE TABLE test(id INT, label BLOB)'));

	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
	$db->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, true);

	class HelloWrapper {
		public function stream_open() { return true; }
		public function stream_eof() { return true; }
		public function stream_read() { return NULL; }
		public function stream_stat() { return array(); }
	}
	stream_wrapper_register("hello", "HelloWrapper");

	$f = fopen("hello://there", "r");

	$stmt = $db->prepare('INSERT INTO test(id, label) VALUES (1, :para)');
	$stmt->bindParam(":para", $f, PDO::PARAM_LOB);
	$stmt->execute();

	var_dump($f);

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
$db = MySQLPDOTest::factory();
$db->exec('DROP TABLE IF EXISTS test');
?>
--EXPECTF--
string(0) ""
done!
