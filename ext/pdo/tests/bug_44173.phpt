--TEST--
PDO Common: Bug #44173 (PDO->query() parameter parsing/checking needs an update)
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
require 'pdo_test.inc';
$db = PDOTest::factory();

$db->exec("CREATE TABLE test (x int)");
$db->exec("INSERT INTO test VALUES (1)");


// Bug entry [1]
try {
    $stmt = $db->query();
} catch (ArgumentCountError $e) {
    echo $e->getMessage(), "\n";
}


// Bug entry [2] -- 1 is PDO::FETCH_LAZY
$stmt = $db->query("SELECT * FROM test", PDO::FETCH_LAZY, 0, 0);
var_dump($stmt);


// Bug entry [3]
$stmt = $db->query("SELECT * FROM test", 'abc');
var_dump($stmt);


// Bug entry [4]
$stmt = $db->query("SELECT * FROM test", PDO::FETCH_CLASS, 0, 0, 0);
var_dump($stmt);


// Bug entry [5]
$stmt = $db->query("SELECT * FROM test", PDO::FETCH_INTO);
var_dump($stmt);


// Bug entry [6]
$stmt = $db->query("SELECT * FROM test", PDO::FETCH_COLUMN);
var_dump($stmt);


// Bug entry [7]
$stmt = $db->query("SELECT * FROM test", PDO::FETCH_CLASS);
var_dump($stmt);


?>
--EXPECTF--
Too few arguments to method PDO::query(): 1 required, 0 provided

Warning: SQLSTATE[HY000]: General error: fetch mode doesn't allow any extra arguments in %s
bool(false)

Warning: SQLSTATE[HY000]: General error: mode must be an integer in %s
bool(false)

Warning: SQLSTATE[HY000]: General error: too many arguments in %s
bool(false)

Warning: SQLSTATE[HY000]: General error: fetch mode requires the object parameter in %s
bool(false)

Warning: SQLSTATE[HY000]: General error: fetch mode requires the colno argument in %s
bool(false)

Warning: SQLSTATE[HY000]: General error: fetch mode requires the classname argument in %s
bool(false)
