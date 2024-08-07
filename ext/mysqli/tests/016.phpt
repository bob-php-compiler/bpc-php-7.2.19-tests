--TEST--
mysqli fetch user variable
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
    ini_set('memory_limit', '512M');
	require_once("connect.inc");

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	if (!mysqli_query($link, "SET @dummy='foobar'"))
		printf("[001] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	if (!$stmt = mysqli_prepare($link, "SELECT @dummy"))
		printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	mysqli_stmt_bind_result($stmt, $dummy);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_fetch($stmt);

	var_dump($dummy);

	mysqli_stmt_close($stmt);
	mysqli_close($link);
	print "done!";
?>
--EXPECTF--
string(6) "foobar"
done!
