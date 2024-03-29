--TEST--
mysqli multi_query, next_result, more_results
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

	$mysql = new my_mysqli($host, $user, $passwd, $db, $port, $socket);
	$mysql->multi_query('SELECT 1;SELECT 2');
	do {
		$res = $mysql->store_result();
		if ($mysql->errno == 0) {
			while ($arr = $res->fetch_assoc()) {
				var_dump($arr);
			}
			$res->free();
		}
		if (!$mysql->more_results()) {
			break;
		}
	} while (@$mysql->next_result());
	$mysql->close();
	print "done!";
?>
--EXPECTF--
array(1) {
  [1]=>
  string(1) "1"
}
array(1) {
  [2]=>
  string(1) "2"
}
done!
