--TEST--
mysqli_fetch_assoc()
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

	$tmp    = NULL;
	$link   = NULL;

	// Note: no SQL type tests, internally the same function gets used as for mysqli_fetch_array() which does a lot of SQL type test

	if (!is_null($tmp = @mysqli_fetch_assoc($link)))
		printf("[002] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	require('table.inc');
	if (!$res = mysqli_query($link, "SELECT id, label FROM test ORDER BY id LIMIT 1")) {
		printf("[004] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}

	print "[005]\n";
	var_dump(mysqli_fetch_assoc($res));

	print "[006]\n";
	var_dump(mysqli_fetch_assoc($res));

	mysqli_free_result($res);

	if (!$res = mysqli_query($link, "SELECT
		1 AS a,
		2 AS a,
		3 AS c,
		4 AS C,
		NULL AS d,
		true AS e,
		5 AS '-1',
		6 AS '-10',
		7 AS '-100',
		8 AS '-1000',
		9 AS '10000',
		'a' AS '100000',
		'b' AS '1000000',
		'c' AS '9',
		'd' AS '9',
		'e' AS '01',
		'f' AS '-02'
	")) {
		printf("[007] Cannot run query, [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}
	print "[008]\n";
	var_dump(mysqli_fetch_assoc($res));

	mysqli_free_result($res);

	if (NULL !== ($tmp = mysqli_fetch_assoc($res)))
		printf("[008] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	mysqli_close($link);

	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
[005]
array(2) {
  ["id"]=>
  string(1) "1"
  ["label"]=>
  string(1) "a"
}
[006]
NULL
[008]
array(15) {
  ["a"]=>
  string(1) "2"
  ["c"]=>
  string(1) "3"
  ["C"]=>
  string(1) "4"
  ["d"]=>
  NULL
  ["e"]=>
  string(1) "1"
  [-1]=>
  string(1) "5"
  [-10]=>
  string(1) "6"
  [-100]=>
  string(1) "7"
  [-1000]=>
  string(1) "8"
  [10000]=>
  string(1) "9"
  [100000]=>
  string(1) "a"
  [1000000]=>
  string(1) "b"
  [9]=>
  string(1) "d"
  ["01"]=>
  string(1) "e"
  ["-02"]=>
  string(1) "f"
}

Warning: mysqli_fetch_assoc(): Couldn't fetch mysqli_result in %s on line %d
done!
