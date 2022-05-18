--TEST--
Bug #70389 (PDO constructor changes unrelated variables)
--SKIPIF--
<?php
if (!extension_loaded('pdo') || !extension_loaded('pdo_mysql')) die('skip PDO_MySQL driver not loaded');
require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'mysql_pdo_test.inc');
MySQLPDOTest::skip();
?>
--FILE--
<?php
require(dirname(__FILE__). DIRECTORY_SEPARATOR . 'config.inc');
$flags = [
	PDO::MYSQL_ATTR_FOUND_ROWS	=> true, // mysqlnd 1005 libmysqlclient 1008
	PDO::MYSQL_ATTR_LOCAL_INFILE	=> true,
	PDO::ATTR_PERSISTENT 		=> true,
];

$std = new StdClass();
$std->flags = $flags;

new PDO(PDO_MYSQL_TEST_DSN, PDO_MYSQL_TEST_USER, PDO_MYSQL_TEST_PASS, $flags);
var_dump($flags);

?>
--EXPECTF--
array(3) {
  [%d]=>
  bool(true)
  [1001]=>
  bool(true)
  [12]=>
  bool(true)
}
