--TEST--
mysqli_set_opt()
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

	$link = mysqli_init();

	if (!is_null($tmp = @mysqli_set_opt($link, "s", 'extra_my.cnf')))
		printf("[004] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	// print "run_tests.php don't fool me with your 'ungreedy' expression '.+?'!\n";
	var_dump(mysqli_set_opt($link, MYSQLI_READ_DEFAULT_GROUP, 'extra_my.cnf'));
	var_dump(mysqli_set_opt($link, MYSQLI_READ_DEFAULT_FILE, 'extra_my.cnf'));
	var_dump(mysqli_set_opt($link, MYSQLI_OPT_CONNECT_TIMEOUT, 10));
	var_dump(mysqli_set_opt($link, MYSQLI_OPT_LOCAL_INFILE, 1));
	var_dump(mysqli_set_opt($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=0'));
	var_dump(my_mysqli_real_connect($link, $host, $user, $passwd, $db, $port, $socket));
	var_dump(mysqli_set_opt($link, MYSQLI_READ_DEFAULT_GROUP, 'extra_my.cnf'));
	var_dump(mysqli_set_opt($link, MYSQLI_READ_DEFAULT_FILE, 'extra_my.cnf'));
	var_dump(mysqli_set_opt($link, MYSQLI_OPT_CONNECT_TIMEOUT, 10));
	var_dump(mysqli_set_opt($link, MYSQLI_OPT_LOCAL_INFILE, 1));
	var_dump(mysqli_set_opt($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=0'));
	var_dump(mysqli_set_opt($link, MYSQLI_CLIENT_SSL, 'not an mysqli_option'));

	mysqli_close($link);

	var_dump(mysqli_set_opt($link, MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT=1'));

	print "done!";
?>
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(true)
bool(false)

Warning: mysqli_set_opt(): Couldn't fetch mysqli in %s on line %d
NULL
done!
