--TEST--
PDO Common: PDO::quote()
--ARGS--
--bpc-include-file ext/pdo/tests/config.inc --bpc-include-file ext/pdo/tests/pdo_test.inc \
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
if (!strncasecmp(getenv('PDOTEST_DSN'), 'odbc', strlen('odbc'))) die('skip odbc driver doesn\'t have escape API, use prepared statements');
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();

$unquoted = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';

$quoted = $db->quote($unquoted);

$len = strlen($unquoted);

@$db->exec("DROP TABLE test");

$db->query("CREATE TABLE test (t char($len))");
$db->query("INSERT INTO test (t) VALUES($quoted)");

$stmt = $db->prepare('SELECT * from test');
$stmt->execute();

print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

$db->exec("DROP TABLE test");

?>
--EXPECT--
Array
(
    [0] => Array
        (
            [t] =>  !"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~
        )

)
