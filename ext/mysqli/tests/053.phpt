--TEST--
not freed resultset
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
	 * non freed resultset
	 ************************/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$result = mysqli_query($link, "SELECT CURRENT_USER()");
	mysqli_close($link);
	printf("Ok\n");

?>
--EXPECT--
Ok
