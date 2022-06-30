--TEST--
$http_reponse_header (no redirect)
--ARGS--
--bpc-include-file ext/standard/tests/http/server.inc \
--SKIPIF--
<?php require 'server.inc'; http_server_skipif('tcp://127.0.0.1:22346'); ?>
--FILE--
<?php
require 'server.inc';

$responses = array(
	"data://text/plain,HTTP/1.0 200 Ok\r\nSome: Header\r\nSome: Header\r\n\r\nBody",
);

$pid = http_server("tcp://127.0.0.1:22346", $responses, $output);

function test() {
    $f = file_get_contents('http://127.0.0.1:22346/');
    var_dump($f);
    var_dump($http_response_header);
}
test();

http_server_kill($pid);
?>
==DONE==
--EXPECT--
string(4) "Body"
NULL
==DONE==
