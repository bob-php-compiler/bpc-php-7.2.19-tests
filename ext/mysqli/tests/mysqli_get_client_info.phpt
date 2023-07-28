--TEST--
mysqli_get_client_info()
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
	if (!is_string($info = mysqli_get_client_info()) || ('' === $info))
		printf("[001] Expecting string/any_non_empty, got %s/%s\n", gettype($info), $info);

	print "done!";
?>
--EXPECTF--
done!
