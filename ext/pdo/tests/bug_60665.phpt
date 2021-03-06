--TEST--
PDO Common: Bug #60665 (call to empty() on NULL result using PDO::FETCH_LAZY returns false)
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();
switch ($db->getAttribute(PDO::ATTR_DRIVER_NAME)) {
	case 'oci': $from = 'from dual'; break;
	case 'firebird': $from = 'from rdb$database'; break;
	default: $from = ''; break;
}
$statement = $db->prepare("SELECT NULL AS null_value, 0 AS zero, 1 AS one $from");
$statement->execute();
$row = $statement->fetch(PDO::FETCH_LAZY);
var_dump(
    empty($row->null_value),
    empty($row->zero),
    !empty($row->one),
    empty($row->missing),
    !isset($row->null_value),
    isset($row->zero),
    isset($row->one),
    !isset($row->missing)
);
?>
===DONE===
--EXPECT--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
===DONE===
