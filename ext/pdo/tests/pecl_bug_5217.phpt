--TEST--
PDO Common: PECL Bug #5217 (serialize/unserialize safety)
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
try {
	$ser = serialize($db);
	debug_zval_dump($ser);
	$db = unserialize($ser);
	$db->exec('CREATE TABLE test (id int NOT NULL PRIMARY KEY, val VARCHAR(10))');
} catch (Exception $e) {
	echo "Safely caught " . $e->getMessage() . "\n";
}

echo "PHP Didn't crash!\n";
?>
--EXPECT--
Safely caught You cannot serialize or unserialize PDO instances
PHP Didn't crash!
