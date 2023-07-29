--TEST--
mysqli_close()
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

	$tmp    = NULL;
	$link   = NULL;

	if (!$mysqli = new my_mysqli($host, $user, $passwd, $db, $port, $socket))
		printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
			$host, $user, $db, $port, $socket);

	var_dump($mysqli->close($link));

	var_dump($mysqli->close());

	if (!is_null($tmp = @$mysqli->close()))
		printf("[004] Expecting NULL got %s/%s\n", gettype($tmp), $tmp);

	if (!is_null($tmp = @$mysqli->query("SELECT 1")))
		printf("[005] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	print "done!";
?>
--EXPECTF--
Warning: Too many arguments to method mysqli::close(): 0 at most, 1 provided in %s on line %d
bool(true)

Warning: mysql::close(): Couldn't fetch mysqli in %s on line %d
NULL
done!
