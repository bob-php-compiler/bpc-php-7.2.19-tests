--TEST--
Bug #48929 (duplicate \r\n sent after last header line)
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
		"data://text/plain,HTTP/1.0 200 OK\r\n\r\n",
	);

	$pid = http_server("tcp://127.0.0.1:12342", $responses, $output);

	foreach($responses as $r) {

		file_get_contents('http://127.0.0.1:12342/', false, $context);

		fseek($output, 0, SEEK_SET);
		var_dump(stream_get_contents($output));
		fseek($output, 0, SEEK_SET);
	}

	http_server_kill($pid);
}

echo "-- Test: requests with 'header' as array --\n";

do_test(array('header' => array('X-Foo: bar', 'Content-Type: text/plain'), 'method' => 'POST', 'content' => 'ohai'));

echo "-- Test: requests with 'header' as string --\n";

do_test(array('header' => "X-Foo: bar\r\nContent-Type: text/plain", 'method' => 'POST', 'content' => 'ohai'));

?>
--EXPECTF--
-- Test: requests with 'header' as array --
string(%d) "POST / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*
X-Foo: bar
Content-Type: text/plain
Content-Length: 4

ohai"
-- Test: requests with 'header' as string --
string(%d) "POST / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*
X-Foo: bar
Content-Type: text/plain
Content-Length: 4
Content-Type: application/x-www-form-urlencoded

ohai"
