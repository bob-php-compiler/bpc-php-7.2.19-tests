--TEST--
PDO Common: Bug #40285 (The prepare parser goes into an infinite loop on ': or ":)
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

$db->exec('CREATE TABLE test (field1 VARCHAR(32), field2 VARCHAR(32), field3 VARCHAR(32), field4 INT)');

$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$s = $db->prepare("INSERT INTO test VALUES( ':id', 'name', 'section', 22)" );
$s->execute();

echo "Done\n";
?>
--EXPECT--
Done
