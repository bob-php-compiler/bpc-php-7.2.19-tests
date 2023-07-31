--TEST--
mysqli_result->lengths
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

	if (!$mysqli = new my_mysqli($host, $user, $passwd, $db, $port, $socket))
		printf("[001] Cannot connect\n");

	require('table.inc');
	if (!$res = $mysqli->query("SELECT id, label FROM test ORDER BY id LIMIT 1")) {
		printf("[002] [%d] %s\n", $mysqli->errno, $mysqli->error);
	}

	var_dump($res->lengths);
	while ($row = $res->fetch_assoc())
		var_dump($res->lengths);
	var_dump($res->lengths);

	$res->free_result();
	var_dump($res->lengths);
	$mysqli->close();
	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
NULL
array(2) {
  [0]=>
  int(1)
  [1]=>
  int(1)
}
NULL

Warning: Couldn't fetch mysqli_result in %s on line %d
NULL
done!
