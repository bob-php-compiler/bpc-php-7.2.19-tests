--TEST--
Bug #74968 PHP crashes when calling mysqli_result::fetch_object with an abstract class
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	require_once("connect.inc");

	$mysqli = new mysqli($host, $user, $passwd, $db);
	abstract class test {
		public $a;
	}
	$mysqli->query("SELECT 1 as a")->fetch_object("test");
?>
==DONE==
--EXPECTF--
Fatal error: Uncaught Error: Class 'test' cannot be instantiated in %sbug74968.php:%d
Stack trace:
#0 %sbug74968.php(%d): mysqli_result->fetch_object('test')
#1 {main}
  thrown in %sbug74968.php on line %d
