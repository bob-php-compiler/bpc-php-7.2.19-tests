--TEST--
Bug #46109 (MySQLi::init - Memory leaks)
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

	$mysqli = new mysqli();
	$mysqli->init();
	$mysqli->init();
	echo "done";
?>
--EXPECTF--
done
