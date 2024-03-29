--TEST--
mysqli_stmt_fetch_fields() unicode, win32
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
	require_once('table.inc');

	$bind_res = $id = null;
	if (!($stmt = mysqli_stmt_init($link)) ||
		!mysqli_stmt_prepare($stmt, "SELECT id, label FROM test") ||
		!mysqli_stmt_execute($stmt) ||
		!($result = mysqli_stmt_result_metadata($stmt)) ||
		!mysqli_stmt_bind_result($stmt, $id, $bind_res) ||
		!($fields = mysqli_fetch_fields($result))) {
		printf("FAIL 1\n");
	}
	while (mysqli_stmt_fetch($stmt)) {
		;
	}
	mysqli_free_result($result);
	mysqli_stmt_close($stmt);

	if (!($stmt = mysqli_stmt_init($link)) ||
		!mysqli_stmt_prepare($stmt, "SELECT id, label FROM test") ||
		!mysqli_stmt_execute($stmt) ||
		!($result = mysqli_stmt_result_metadata($stmt)) ||
		!mysqli_stmt_bind_result($stmt, $id, $bind_res)) {
		printf("FAIL 2\n");
	}
	print "OK: 1\n";
	if (!($fields = mysqli_fetch_fields($result)))
		printf("Aua 3\n");
	print "OK: 2\n";
	while (mysqli_stmt_fetch($stmt)) {
		;
	}
	mysqli_free_result($result);
	mysqli_stmt_close($stmt);

	mysqli_close($link);
	print "done!";
?>
--CLEAN--
<?php
	require_once("clean_table.inc");
?>
--EXPECTF--
OK: 1
OK: 2
done!
