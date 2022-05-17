--TEST--
PDO Common: Bug #34687 (query doesn't return error information)
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$x = $db->query("UPDATE non_existent_pdo_test_table set foo = 'bar'");

var_dump($x);
$code = $db->errorCode();
if ($code !== '00000' && strlen($code)) {
	echo "OK: $code\n";
} else {
	echo "ERR: $code\n";
	print_r($db->errorInfo());
}

?>
--EXPECTF--
bool(false)
OK: %s
