--TEST--
PDO MySQL SHOW TABLES
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip not loaded');
require 'pdo_test.inc';
PDOTest::skip();
?>
--FILE--
<?php
require 'pdo_test.inc';
$db = PDOTest::factory();

print_r($db->query('SHOW TABLES'));
--EXPECT--
PDOStatement Object
(
    [queryString] => SHOW TABLES
)
