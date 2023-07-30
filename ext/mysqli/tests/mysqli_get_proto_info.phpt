--TEST--
mysqli_get_proto_info()
--ARGS--
--bpc-include-file ext/mysqli/tests/connect.inc \
--bpc-include-file ext/mysqli/tests/skipifconnectfailure.inc \
--bpc-include-file ext/mysqli/tests/table.inc \
--SKIPIF--
<?php
require_once('skipifconnectfailure.inc');
?>
--FILE--
<?php
	require_once("connect.inc");

	if (!is_null($tmp = @mysqli_get_proto_info(NULL)))
		printf("[002] Expecting NULL, got %s/%s\n", gettype($tmp), $tmp);

	require "table.inc";
	if (!is_int($info = mysqli_get_proto_info($link)) || ($info < 1))
		printf("[003] Expecting int/any_non_empty, got %s/%s\n", gettype($info), $info);

	print "done!";
?>
--EXPECTF--
done!
