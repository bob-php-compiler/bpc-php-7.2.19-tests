--TEST--
Bug #51605 Mysqli - zombie links
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--INI--
mysqli.max_links = 1
mysqli.allow_persistent = Off
mysqli.max_persistent = 0
mysqli.reconnect = Off
--FILE--
<?php
	include ("connect.inc");

	$link = mysqli_init();
	if (!my_mysqli_real_connect($link, $host, $user, $passwd, $db, $port, $socket)) {
		printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
	}
	mysqli_close($link);
	echo "closed once\n";

	$link = mysqli_init();
	if (!my_mysqli_real_connect($link, $host, $user, $passwd, $db, $port, $socket)) {
		printf("[002] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
	}
	mysqli_close($link);
	echo "closed twice\n";

	$link = mysqli_init();
	if (!my_mysqli_real_connect($link, $host, $user, $passwd, $db, $port, $socket)) {
		printf("[003] Connect failed, [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());
	}
	mysqli_close($link);
	echo "closed for third time\n";

	print "done!";
?>
--EXPECTF--
closed once
closed twice
closed for third time
done!
