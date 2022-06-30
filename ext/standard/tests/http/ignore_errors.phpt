--TEST--
http:// and ignore_errors
--ARGS--
--bpc-include-file ext/standard/tests/http/server.inc \
--SKIPIF--
<?php require 'server.inc'; http_server_skipif('tcp://127.0.0.1:12342'); ?>
--FILE--
<?php
ob_implicit_flush();
require 'server.inc';

function do_test($context_options) {

	$context = stream_context_create(array('http' => $context_options));

	$responses = array(
		"data://text/plain,HTTP/1.0 200 Ok\r\nX-Foo: bar\r\n\r\n1",
		"data://text/plain,HTTP/1.0 404 Not found\r\nX-bar: baz\r\n\r\n2",
	);

	$pid = http_server("tcp://127.0.0.1:12342", $responses, $output);

	foreach($responses as $r) {

        var_dump(file_get_contents('http://127.0.0.1:12342/foo/bar', false, $context));

		fseek($output, 0, SEEK_SET);
		var_dump(stream_get_contents($output));
		fseek($output, 0, SEEK_SET);
	}

	http_server_kill($pid);
}

echo "-- Test: requests without ignore_errors --\n";

do_test(array());

echo "-- Test: requests with ignore_errors --\n";

do_test(array('ignore_errors' => true));

echo "-- Test: requests with ignore_errors (2) --\n";

do_test(array('ignore_errors' => 1));

?>
--EXPECTF--
-- Test: requests without ignore_errors --
string(1) "1"
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): The requested URL returned error: 404 Not found in %s on line %d
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: requests with ignore_errors --
string(1) "1"
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
string(1) "2"
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: requests with ignore_errors (2) --
string(1) "1"
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
string(1) "2"
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
