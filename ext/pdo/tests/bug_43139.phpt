--TEST--
PDO Common: Bug #43139 (PDO ignore ATTR_DEFAULT_FETCH_MODE in some cases with fetchAll())
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

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

$from = '';
if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'oci') {
	$from = 'from dual';
} else if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'firebird') {
	$from = 'FROM RDB$DATABASE';
}

var_dump($db->query("select 0 as abc, 1 as xyz, 2 as def $from")->fetchAll(PDO::FETCH_GROUP));
?>
--EXPECT--
array(1) {
  [0]=>
  array(1) {
    [0]=>
    array(2) {
      ["xyz"]=>
      string(1) "1"
      ["def"]=>
      string(1) "2"
    }
  }
}
