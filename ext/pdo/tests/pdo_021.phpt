--TEST--
PDO Common: PDOStatement::execute with parameters
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

if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
	$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
}

$db->exec('CREATE TABLE test(id INT NOT NULL PRIMARY KEY, val VARCHAR(10), val2 VARCHAR(16))');

$select = $db->prepare('SELECT COUNT(id) FROM test');

$data = array(
    array('10', 'Abc', 'zxy'),
    array('20', 'Def', 'wvu'),
    array('30', 'Ghi', 'tsr'),
    array('40', 'Jkl', 'qpo'),
    array('50', 'Mno', 'nml'),
    array('60', 'Pqr', 'kji'),
);


// Insert using question mark placeholders
$stmt = $db->prepare("INSERT INTO test VALUES(?, ?, ?)");
foreach ($data as $row) {
    $stmt->execute($row);
}
$select->execute();
$num = $select->fetchColumn();
echo 'There are ' . $num . " rows in the table.\n";

// Insert using named parameters
$stmt2 = $db->prepare("INSERT INTO test VALUES(:first, :second, :third)");
foreach ($data as $row) {
    $stmt2->execute(array(':first'=>($row[0] + 5), ':second'=>$row[1],
        ':third'=>$row[2]));
}

$select->execute();
$num = $select->fetchColumn();
echo 'There are ' . $num . " rows in the table.\n";


?>
--EXPECT--
There are 6 rows in the table.
There are 12 rows in the table.
