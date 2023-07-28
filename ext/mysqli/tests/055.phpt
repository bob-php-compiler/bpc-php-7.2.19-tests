--TEST--
free nothing
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

	/************************
	 * don't free anything
	 ************************/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$result2 = mysqli_query($link, "SELECT CURRENT_USER()");
	$stmt2 = mysqli_prepare($link, "SELECT CURRENT_USER()");
	printf("Ok\n");
?>
--EXPECT--
Ok
