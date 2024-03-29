--TEST--
Bug #73462 (Persistent connections don't set $connect_errno)
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

	/* Initial persistent connection */
	$mysql_1 = new mysqli('p:'.$host, $user, $passwd, $db);
	$result = $mysql_1->query("SHOW STATUS LIKE 'Connections'");
	$c1 = $result->fetch_row();
	$result->free();
	$mysql_1->close();

	/* Failed connection to invalid host */
	$mysql_2 = @new mysqli(' !!! invalid !!! ', $user, $passwd, $db);
	@$mysql_2->close();

	/* Re-use persistent connection */
	$mysql_3 = new mysqli('p:'.$host, $user, $passwd, $db);
	$error = mysqli_connect_errno();
	$result = $mysql_3->query("SHOW STATUS LIKE 'Connections'");
	$c3 = $result->fetch_row();
	$result->free();
	$mysql_3->close();

	if (end($c1) !== end($c3))
		printf("[001] Expected '%d' got '%d'.\n", end($c1), end($c3));

	if ($error !== 0)
		printf("[002] Expected '0' got '%d'.\n", $error);

	print "done!";
?>
--EXPECTF--
done!
