--TEST--
mysqli bind_param/bind_result with send_long_data
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

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);

	mysqli_select_db($link, $db);
	mysqli_query($link, "SET sql_mode=''");

	mysqli_query($link,"DROP TABLE IF EXISTS test_bind_fetch");
	mysqli_query($link,"CREATE TABLE test_bind_fetch(c1 varchar(10), c2 text)");

	$stmt = mysqli_prepare ($link, "INSERT INTO test_bind_fetch VALUES (?,?)");
	mysqli_stmt_bind_param($stmt, "sb", $c1, $c2);

	$c1 = "Hello World";

	mysqli_stmt_send_long_data($stmt, 1, "This is the first sentence.");
	mysqli_stmt_send_long_data($stmt, 1, " And this is the second sentence.");
	mysqli_stmt_send_long_data($stmt, 1, " And finally this is the last sentence.");

	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);

	$stmt = mysqli_prepare($link, "SELECT * FROM test_bind_fetch");
	mysqli_stmt_bind_result($stmt, $d1, $d2);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_fetch($stmt);

	$test = array($d1,$d2);

	var_dump($test);

	mysqli_stmt_close($stmt);
	mysqli_query($link, "DROP TABLE IF EXISTS test_bind_fetch");
	mysqli_close($link);
	print "done!";
?>
--CLEAN--
<?php
require_once("connect.inc");
if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
   printf("[c001] [%d] %s\n", mysqli_connect_errno(), mysqli_connect_error());

if (!mysqli_query($link, "DROP TABLE IF EXISTS test_bind_fetch"))
	printf("[c002] Cannot drop table, [%d] %s\n", mysqli_errno($link), mysqli_error($link));

mysqli_close($link);
?>
--EXPECTF--
array(2) {
  [0]=>
  string(10) "Hello Worl"
  [1]=>
  string(99) "This is the first sentence. And this is the second sentence. And finally this is the last sentence."
}
done!
