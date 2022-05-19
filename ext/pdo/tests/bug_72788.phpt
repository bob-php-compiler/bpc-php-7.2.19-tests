--TEST--
PDO Common: Bug #72788 (Invalid memory access when using persistent PDO connection)
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

putenv("PDOTEST_ATTR=" . serialize(array(PDO::ATTR_PERSISTENT => true)));

function test() {
    $db = PDOTest::factory('PDO', false);
    $stmt = @$db->query("SELECT 1 FROM TABLE_DOES_NOT_EXIST");
    if ($stmt === false) {
        echo "Statement failed as expected\n";
    }
}

test();
test();
echo "Done";
?>
--EXPECT--
Statement failed as expected
Statement failed as expected
Done
