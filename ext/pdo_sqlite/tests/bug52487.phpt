--TEST--
Bug #52487 (PDO::FETCH_INTO leaks memory)
--ARGS--
--bpc-include-file ext/pdo_sqlite/tests/config.inc --bpc-include-file ext/pdo_sqlite/tests/pdo_test.inc \
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

$stmt = $db->prepare("select 1 as attr");
for ($i = 0; $i < 10; $i++) {
	$stmt->setFetchMode(PDO::FETCH_INTO, new stdClass);
}

print "ok\n";

?>
--EXPECT--
ok
