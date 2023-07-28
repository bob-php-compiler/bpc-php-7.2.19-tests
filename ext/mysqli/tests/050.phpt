--TEST--
non freed statement test
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
	 * non freed stamement
	 ************************/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$stmt = mysqli_prepare($link, "SELECT CURRENT_USER()");
	mysqli_stmt_execute($stmt);

	mysqli_close($link);
	printf("Ok\n");
?>
--EXPECT--
Ok
