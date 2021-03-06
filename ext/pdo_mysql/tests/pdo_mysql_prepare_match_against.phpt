--TEST--
Bug #41876 (bindParam() and bindValue() do not work with MySQL MATCH () AGAINST ())
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
?>
--FILE--
<?php
	require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
	$db = MySQLPDOTest::factory();

	try {

		$db->exec('DROP TABLE IF EXISTS test');
		$db->exec('CREATE TABLE test(id INT, label CHAR(255)) ENGINE=MyISAM');
		$db->exec('CREATE FULLTEXT INDEX idx1 ON test(label)');

		$stmt = $db->prepare('SELECT id, label FROM test WHERE MATCH label AGAINST (:placeholder)');
		$stmt->execute(array(':placeholder' => 'row'));
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$stmt = $db->prepare('SELECT id, label FROM test WHERE MATCH label AGAINST (:placeholder)');
		$stmt->execute(array('placeholder' => 'row'));
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

		$stmt = $db->prepare('SELECT id, label FROM test WHERE MATCH label AGAINST (?)');
		$stmt->execute(array('row'));
		var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

	} catch (PDOException $e) {

		printf("[001] %s, [%s} %s\n",
			$e->getMessage(), $db->errorCode(), implode(' ', $db->errorInfo()));

	}

	print "done!";
?>
--CLEAN--
<?php
require dirname(__FILE__) . '/mysql_pdo_test.inc';
$db = MySQLPDOTest::factory();
$db->exec('DROP TABLE IF EXISTS test');
?>
--EXPECTF--
array(0) {
}
array(0) {
}
array(0) {
}
done!
