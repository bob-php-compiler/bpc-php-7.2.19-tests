--TEST--
mysqli_dump_debug_info()
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

	$tmp	= NULL;
	$link	= NULL;

	if (!$mysqli = new mysqli($host, $user, $passwd, $db, $port, $socket))
		printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n", $host, $user, $db, $port, $socket);

	var_dump($mysqli->dump_debug_info($link));

	if (!is_bool($tmp = $mysqli->dump_debug_info()))
		printf("[003] Expecting boolean/[true|false] value, got %s/%s, [%d] %s\n",
			gettype($tmp), $tmp,
			$mysqli->errno, $mysqli->error);

	$mysqli->close();

	if (NULL !== ($tmp = $mysqli->dump_debug_info()))
		printf("[004] Expecting NULL, got %s/%s, [%d] %s\n",
			gettype($tmp), $tmp,
			$mysqli->errno, $mysqli->error);

	print "done!";
?>
--EXPECTF--
Warning: Too many arguments to method mysqli::dump_debug_info(): 0 at most, 1 provided in %s on line %d
bool(true)

Warning: mysqli::dump_debug_info(): Couldn't fetch mysqli in %s on line %d
done!
