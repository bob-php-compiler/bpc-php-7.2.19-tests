--TEST--
function test: mysqli_get_host_info
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

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	$hinfo = mysqli_get_host_info($link);

	var_dump(str_replace('/','', $hinfo));

	mysqli_close($link);
	print "done!";
?>
--EXPECTF--
string(%d) "%s via %s"
done!
