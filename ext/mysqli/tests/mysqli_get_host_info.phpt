--TEST--
mysqli_get_host_info()
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--bpc-include-file ext/mysqli/tests/table.inc \
--bpc-include-file ext/mysqli/tests/clean_table.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	require_once("connect.inc");

	if (!is_null($tmp = @mysqli_get_host_info(NULL)))
		printf("[002] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	require "table.inc";
	if (!is_string($info = mysqli_get_host_info($link)) || ('' === $info))
		printf("[003] Expecting string/any_non_empty, got %s/%s\n", gettype($info), $info);

	if ($IS_MYSQLND && $host != 'localhost' && $host != '127.0.0.1' && $port != '' && $host != "" && strtoupper(substr(PHP_OS, 0, 3)) != 'WIN') {
		/* this should be a TCP/IP connection and not a Unix Socket (or SHM or Named Pipe) */
		if (!stristr($info, "TCP/IP"))
			printf("[004] Should be a TCP/IP connection but mysqlnd says '%s'\n", $info);
	}
	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
done!
