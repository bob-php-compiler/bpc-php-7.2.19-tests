--TEST--
free resultset after close
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
	 * free resultset after close
	 ************************/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$result1 = mysqli_query($link, "SELECT CURRENT_USER()");
	mysqli_close($link);
	mysqli_free_result($result1);
	printf("Ok\n");
?>
--EXPECT--
Ok
