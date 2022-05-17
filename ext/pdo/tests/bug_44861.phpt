--TEST--
PDO Common: Bug #44861 (scrollable cursor don't work with pgsql)
--SKIPIF--
<?php # vim:ft=php
if (!extension_loaded('pdo')) die('skip');
require_once 'pdo_test.inc';
$allowed = array('oci', 'pgsql');
$ok = false;
foreach ($allowed as $driver) {
	if (!strncasecmp(getenv('PDOTEST_DSN'), $driver, strlen($driver))) {
		$ok = true;
	}
}
if (!$ok) {
	die("skip Scrollable cursors not supported");
}
PDOTest::skip();
?>
--FILE--
<?php
require_once 'pdo_test.inc';
$db = PDOTest::factory();

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'oci') {
	$from = 'FROM DUAL';
	$ob = '1';
} else {
	$from = '';
	$ob = 'r';
}

$query = "SELECT 'row1' AS r $from UNION SELECT 'row2' $from UNION SELECT 'row3' $from UNION SELECT 'row4' $from ORDER BY $ob";
$aParams = array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL);

$res = $db->prepare($query, $aParams);
$res->execute();
var_dump($res->fetchColumn());
var_dump($res->fetchColumn());
var_dump($res->fetchColumn());
var_dump($res->fetchColumn());
var_dump($res->fetchColumn());

var_dump($res->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_ABS, 3));
var_dump($res->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_PRIOR));
var_dump($res->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_FIRST));
var_dump($res->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_LAST));
var_dump($res->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_REL, -1));

var_dump($res->fetchAll(PDO::FETCH_ASSOC));

// Test binding params via emulated prepared query
$res = $db->prepare("SELECT ? $from", $aParams);
$res->execute(array("it's working"));
var_dump($res->fetch(PDO::FETCH_NUM));


// Test bug #48188, trying to execute again
$res->execute(array("try again"));
var_dump($res->fetchColumn());
var_dump($res->fetchColumn());

?>
--EXPECT--
string(4) "row1"
string(4) "row2"
string(4) "row3"
string(4) "row4"
bool(false)
array(1) {
  [0]=>
  string(4) "row3"
}
array(1) {
  [0]=>
  string(4) "row2"
}
array(1) {
  [0]=>
  string(4) "row1"
}
array(1) {
  [0]=>
  string(4) "row4"
}
array(1) {
  [0]=>
  string(4) "row3"
}
array(1) {
  [0]=>
  array(1) {
    ["r"]=>
    string(4) "row4"
  }
}
array(1) {
  [0]=>
  string(12) "it's working"
}
string(9) "try again"
bool(false)
