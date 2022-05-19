--TEST--
PDO Common: assert that bindParam does not modify parameter
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

switch ($db->getAttribute(PDO::ATTR_DRIVER_NAME)) {
	case 'dblib':
		// environment settings can influence how the table is created if specifics are missing
		// https://msdn.microsoft.com/en-us/library/ms174979.aspx#Nullability Rules Within a Table Definition
		$sql = 'create table test (id int, name varchar(10) null)';
		break;
	default:
		$sql = 'create table test (id int, name varchar(10))';
		break;
}
$db->exec($sql);

$stmt = $db->prepare('insert into test (id, name) values(0, :name)');
$name = NULL;
$before_bind = $name;
$stmt->bindParam(':name', $name, PDO::PARAM_NULL);
if ($name !== $before_bind) {
	echo "bind: fail\n";
} else {
	echo "bind: success\n";
}
var_dump($stmt->execute());
var_dump($db->query('select name from test where id=0')->fetchColumn());

?>
--EXPECT--
bind: success
bool(true)
NULL
