--TEST--
PDO MySQL auto_increment / last insert id
--ARGS--
--bpc-include-file ext/pdo_mysql/tests/config.inc --bpc-include-file ext/pdo_mysql/tests/pdo_test.inc --bpc-include-file ext/pdo_mysql/tests/mysql_pdo_test.inc \
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip not loaded');
require 'mysql_pdo_test.inc';
MySQLPDOTest::skip();
?>
--FILE--
<?php
require 'mysql_pdo_test.inc';
$db = MySQLPDOTest::factory();

print_r($db->query("CREATE TABLE test (id int auto_increment primary key, num int)"));

print_r($db->query("INSERT INTO test (id, num) VALUES (23, 42)"));

print_r($db->query("INSERT INTO test (num) VALUES (451)"));

print_r($db->lastInsertId());
--EXPECT--
PDOStatement Object
(
    [queryString] => CREATE TABLE test (id int auto_increment primary key, num int)
)
PDOStatement Object
(
    [queryString] => INSERT INTO test (id, num) VALUES (23, 42)
)
PDOStatement Object
(
    [queryString] => INSERT INTO test (num) VALUES (451)
)
24
