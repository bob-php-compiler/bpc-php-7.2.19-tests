--TEST--
free statement after close
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
	 * free statement after close
	 ************************/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$stmt1 = mysqli_prepare($link, "SELECT CURRENT_USER()");
	mysqli_stmt_execute($stmt1);

	mysqli_close($link);
	@mysqli_stmt_close($stmt1);
	printf("Ok\n");
?>
--EXPECT--
Ok
