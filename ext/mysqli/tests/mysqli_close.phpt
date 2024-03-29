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

	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
		printf("[003] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
			$host, $user, $db, $port, $socket);

	$tmp = @mysqli_close(NULL);
	if (NULL !== $tmp)
		printf("[004] Expecting NULL/NULL, got %s/%s\n", gettype($tmp), $tmp);

	$tmp = mysqli_close($link);
	if (true !== $tmp)
		printf("[005] Expecting boolean/true, got %s/%s\n", gettype($tmp), $tmp);

	if (!is_null($tmp = @mysqli_query($link, "SELECT 1")))
		printf("[006] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	print "done!";
?>
--EXPECTF--
done!
