--TEST--
Bug #34785 (Can not properly subclass mysqli_stmt)
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	include ("connect.inc");

	class my_stmt extends mysqli_stmt
	{
		public function __construct($link, $query) {
			parent::__construct($link, $query);
		}
	}

	class my_result extends mysqli_result
	{
		public function __construct($link, $query) {
			parent::__construct($link, $query);
		}
	}

	/*** test mysqli_connect 127.0.0.1 ***/
	$link = my_mysqli_connect($host, $user, $passwd, $db, $port, $socket);
	mysqli_query($link, "SET sql_mode=''");

	$stmt = new my_stmt($link, "SELECT 'foo' FROM DUAL");

	$stmt->execute();
	$stmt->bind_result($var);
	$stmt->fetch();

	$stmt->close();
	var_dump($var);

	mysqli_real_query($link, "SELECT 'bar' FROM DUAL");
	$result = new my_result($link, MYSQLI_STORE_RESULT);
	$row = $result->fetch_row();
	$result->close();

	var_dump($row[0]);

	mysqli_close($link);
?>
--EXPECTF--
%s(3) "foo"
%s(3) "bar"
