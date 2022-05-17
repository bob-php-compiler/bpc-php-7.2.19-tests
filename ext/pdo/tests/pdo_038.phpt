--TEST--
PDOStatement::fetchColumn() invalid column index
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';

function fetchColumn($stmt, $index) {
    $stmt->execute();
    return $stmt->fetchColumn($index);
}

$conn  = PDOTest::factory();
$query = 'SELECT 1';

switch ($conn->getAttribute(PDO::ATTR_DRIVER_NAME)) {
    case 'oci':
        $query .= ' FROM DUAL';
        break;
    case 'firebird':
        $query .= ' FROM RDB$DATABASE';
        break;
}

$stmt = $conn->prepare($query);

var_dump(fetchColumn($stmt, -1));
var_dump(fetchColumn($stmt, 0));
var_dump(fetchColumn($stmt, 1));
?>
--EXPECTF--
Warning: PDOStatement::fetchColumn(): SQLSTATE[HY000]: General error: Invalid column index in %s
bool(false)
string(1) "1"

Warning: PDOStatement::fetchColumn(): SQLSTATE[HY000]: General error: Invalid column index in %s
bool(false)
