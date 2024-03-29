--TEST--
Trying to clone mysqli_stmt object
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

	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
		printf("[001] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
			$host, $user, $db, $port, $socket);

	if (!$stmt = mysqli_stmt_init($link))
		printf("[002] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	/* no, still bails out */
	$stmt_clone = clone $stmt;
	print "done!";
?>
--EXPECTF--
Fatal error: Uncaught Error: Trying to clone an uncloneable object of class mysqli_stmt in %s:%d
Stack trace:
#0 {main}
  thrown in %s on line %d
