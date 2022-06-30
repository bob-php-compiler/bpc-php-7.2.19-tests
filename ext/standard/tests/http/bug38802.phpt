--TEST--
Bug #38802 (ignore_errors and max_redirects)
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
		"data://text/plain,HTTP/1.0 302 Moved Temporarily\r\nLocation: http://127.0.0.1:12342/foo/bar2\r\n\r\n1",
		"data://text/plain,HTTP/1.0 301 Moved Permanently\r\nLocation: http://127.0.0.1:12342/foo/bar3\r\n\r\n",
		"data://text/plain,HTTP/1.0 302 Moved Temporarily\r\nLocation: http://127.0.0.1:12342/foo/bar4\r\n\r\n3",
		"data://text/plain,HTTP/1.0 200 OK\r\n\r\ndone.",
	);

	$pid = http_server("tcp://127.0.0.1:12342", $responses, $output);

	var_dump(file_get_contents('http://127.0.0.1:12342/foo/bar', false, $context));

	fseek($output, 0, SEEK_SET);
	var_dump(stream_get_contents($output));

	http_server_kill($pid);
}

echo "-- Test: follow all redirections --\n";

do_test(array());

echo "-- Test: fail after 2 redirections --\n";

do_test(array('max_redirects' => 2));

echo "-- Test: fail at first redirection --\n";

do_test(array('max_redirects' => 0));

echo "-- Test: fail at first redirection (2) --\n";

do_test(array('max_redirects' => 1));

echo "-- Test: return at first redirection --\n";

do_test(array('max_redirects' => 0, 'ignore_errors' => 1));

echo "-- Test: return at first redirection (2) --\n";

do_test(array('max_redirects' => 1, 'ignore_errors' => 1));

echo "-- Test: return at second redirection --\n";

do_test(array('max_redirects' => 2, 'ignore_errors' => 1));

?>
--EXPECTF--
-- Test: follow all redirections --
string(5) "done."
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar2 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar3 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar4 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: fail after 2 redirections --

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): Maximum (2) redirects followed in %s
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar2 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar3 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: fail at first redirection --

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): Maximum (0) redirects followed in %s
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: fail at first redirection (2) --

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): Maximum (1) redirects followed in %s
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar2 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: return at first redirection --

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): Maximum (0) redirects followed in %s
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: return at first redirection (2) --

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): Maximum (1) redirects followed in %s
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar2 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
-- Test: return at second redirection --

Warning: file_get_contents(http://127.0.0.1:12342/foo/bar): Maximum (2) redirects followed in %s
bool(false)
string(%d) "GET /foo/bar HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar2 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

GET /foo/bar3 HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

"
