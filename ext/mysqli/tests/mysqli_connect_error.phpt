--TEST--
mysqli_connect_error()
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

	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
		printf("[002] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
			$host, $user, $db, $port, $socket);

	if (NULL !== ($tmp = mysqli_connect_error()))
		printf("[003] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	mysqli_close($link);

	if ($link = @my_mysqli_connect($host, $user . 'unknown_really', $passwd . 'non_empty', $db, $port, $socket))
		printf("[003] Connect to the server should fail using host=%s, user=%s, passwd=***non_empty, dbname=%s, port=%s, socket=%s\n",
			$host, $user . 'unknown_really', $db, $port, $socket);

	if ('' === ($tmp = mysqli_connect_error()))
		printf("[004] Expecting string/'', got %s/%s\n", gettype($tmp), $tmp);

	print "done!";
?>
--EXPECTF--
done!
