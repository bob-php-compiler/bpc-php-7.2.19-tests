--TEST--
mysqli_real_escape_string() - euckr
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--bpc-include-file ext/mysqli/tests/clean_table.inc \
--SKIPIF--
<?php
if (ini_get('unicode.semantics'))
	die("skip Test cannot be run in unicode mode");

require_once('skipifconnectfailure.inc');
require_once('connect.inc');

if (!$link = mysqli_connect($host, $user, $passwd, $db, $port, $socket)) {
	die(sprintf("skip Cannot connect to MySQL, [%d] %s\n",
		mysqli_connect_errno(), mysqli_connect_error()));
}
if (!mysqli_set_charset($link, 'euckr'))
	die(sprintf("skip Cannot set charset 'euckr'"));
mysqli_close($link);
?>
--FILE--
<?php
	require_once("connect.inc");
	if (!$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket))
{
		printf("[001] Cannot connect to the server using host=%s, user=%s,
passwd=***, dbname=%s, port=%s, socket=%s - [%d] %s\n", $host, $user, $db,
$port, $socket, mysqli_connect_errno(), mysqli_connect_error());
	}

	if (!mysqli_query($link, 'DROP TABLE IF EXISTS test')) {
		printf("Failed to drop old test table: [%d] %s\n", mysqli_errno($link),
mysqli_error($link));
	}

	if (!mysqli_query($link, 'CREATE TABLE test(id INT, label CHAR(1), PRIMARY
KEY(id)) ENGINE=' . $engine . " DEFAULT CHARSET=euckr")) {
		printf("Failed to create test table: [%d] %s\n", mysqli_errno($link),
mysqli_error($link));
	}

	var_dump(mysqli_set_charset($link, "euckr"));

	if ('권대성\\\\권대성' !== ($tmp = mysqli_real_escape_string($link, '권대성\\권대성')))
		printf("[004] Expecting \\\\, got %s\n", $tmp);

	if ('권대성\"권대성' !== ($tmp = mysqli_real_escape_string($link, '권대성"권대성')))
		printf("[005] Expecting \", got %s\n", $tmp);

	if ("권대성\'권대성" !== ($tmp = mysqli_real_escape_string($link, "권대성'권대성")))
		printf("[006] Expecting ', got %s\n", $tmp);

	if ("권대성\\n권대성" !== ($tmp = mysqli_real_escape_string($link, "권대성\n권대성")))
		printf("[007] Expecting \\n, got %s\n", $tmp);

	if ("권대성\\r권대성" !== ($tmp = mysqli_real_escape_string($link, "권대성\r권대성")))
		printf("[008] Expecting \\r, got %s\n", $tmp);

	if ("권대성\\0권대성" !== ($tmp = mysqli_real_escape_string($link, "권대성" . chr(0) . "권대성")))
		printf("[009] Expecting %s, got %s\n", "권대성\\0권대성", $tmp);

	var_dump(mysqli_query($link, "INSERT INTO test(id, label) VALUES (100, '권')"));

	mysqli_close($link);
	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
bool(true)
bool(true)
done!
