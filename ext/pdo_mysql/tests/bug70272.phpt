--TEST--
Bug #70272 (Segfault in pdo_mysql)
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
?>
--INI--
report_memleaks=off
--FILE--
<?php
$a = new Stdclass();
$a->a = &$a;
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');

$dummy = new StdClass();

$db = PDOTest::factory();
$dummy = NULL;

$a->c = $db;
$a->b = $db->prepare("select 1");
$a->d = $db->prepare("select 2");
$a->e = $db->prepare("select 3");
$a->f = $db->prepare("select 4");
gc_disable();
?>
okey
--EXPECT--
okey
