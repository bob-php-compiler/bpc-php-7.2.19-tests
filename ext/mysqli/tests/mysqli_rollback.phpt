--TEST--
mysqli_rollback()
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--bpc-include-file ext/mysqli/tests/clean_table.inc \
--SKIPIF--
<?php  ?>
<?php  ?>
<?PHP
	require_once('skipifconnectfailure.inc');

	require_once('connect.inc');
	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
		die(sprintf("Cannot connect, [%d] %s", mysqli_connect_errno(), mysqli_connect_error()));

	if (!have_innodb($link))
		die(sprintf("Needs InnoDB support, [%d] %s", $link->errno, $link->error));
?>
--FILE--
<?php
	require_once("connect.inc");

	$tmp    = NULL;
	$link   = NULL;

	if (!is_null($tmp = @mysqli_rollback($link)))
		printf("[002] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
		printf("[003] Cannot connect to the server using host=%s, user=%s, passwd=***, dbname=%s, port=%s, socket=%s\n",
			$host, $user, $db, $port, $socket);

	if (!is_null($tmp = @mysqli_rollback($link, 'foo')))
		printf("[004] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	if (true !== ($tmp = mysqli_autocommit($link, false)))
		printf("[005] Cannot turn off autocommit, expecting true, got %s/%s\n", gettype($tmp), $tmp);

	if (!mysqli_query($link, 'DROP TABLE IF EXISTS test'))
		printf("[006] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	if (!mysqli_query($link, 'CREATE TABLE test(id INT) ENGINE = InnoDB'))
		printf("[007] Cannot create test table, [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	if (!mysqli_query($link, 'INSERT INTO test(id) VALUES (1)'))
		printf("[008] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	$tmp = mysqli_rollback($link);
	if ($tmp !== true)
		printf("[009] Expecting boolean/true, got %s/%s\n", gettype($tmp), $tmp);

	if (!$res = mysqli_query($link, 'SELECT COUNT(*) AS num FROM test'))
		printf("[011] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	$tmp = mysqli_fetch_assoc($res);
	if (0 != $tmp['num'])
		printf("[12] Expecting 0 rows in table test, found %d rows\n", $tmp['num']);
	mysqli_free_result($res);

	if (!mysqli_query($link, 'DROP TABLE IF EXISTS test'))
		printf("[013] [%d] %s\n", mysqli_errno($link), mysqli_error($link));

	mysqli_close($link);

	if (!is_null($tmp = mysqli_rollback($link)))
		printf("[014] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	print "done!\n";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
Warning: mysqli_rollback(): Couldn't fetch mysqli in %s on line %d
done!
