--TEST--
mysqli_free_result()
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

	if (!is_null($tmp = @mysqli_free_result($link)))
		printf("[002] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	require('table.inc');
	if (!$res = mysqli_query($link, "SELECT id FROM test ORDER BY id LIMIT 1")) {
		printf("[003] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}

	print "a\n";
	var_dump(mysqli_free_result($res));
	print "b\n";
	var_dump(mysqli_free_result($res));

	if (!$res = mysqli_query($link, "SELECT id FROM test ORDER BY id LIMIT 1")) {
		printf("[004] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}
	print "c\n";
	var_dump($res = mysqli_store_result($link));
	var_dump(mysqli_error($link));
	print "[005]\n";
	var_dump(mysqli_free_result($res));

	if (!$res = mysqli_query($link, "SELECT id FROM test ORDER BY id LIMIT 1")) {
		printf("[006] [%d] %s\n", mysqli_errno($link), mysqli_error($link));
	}
	print "d\n";
	var_dump($res = mysqli_use_result($link));
	var_dump(mysqli_error($link));
	print "[007]\n";
	var_dump(mysqli_free_result($res));

	mysqli_close($link);
	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
a
NULL
b

Warning: mysqli_free_result(): Couldn't fetch mysqli_result in %s on line %d
NULL
c
bool(false)
%s(%d) "%A"
[005]

Warning: mysqli_free_result() expects parameter 1 to be mysqli_result, boolean given in %s on line %d
NULL
d
bool(false)
%s(%d) "%A"
[007]

Warning: mysqli_free_result() expects parameter 1 to be mysqli_result, boolean given in %s on line %d
NULL
done!
