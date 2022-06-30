--TEST--
Bug #65634 (HTTP wrapper is very slow with protocol_version 1.1)
--ARGS--
--bpc-include-file ext/standard/tests/http/server.inc \
--SKIPIF--
<?php require 'server.inc'; http_server_skipif('tcp://127.0.0.1:12342'); ?>
--FILE--
<?php
ob_implicit_flush();
require 'server.inc';

function do_test($version, $connection) {
    $options = array(
        'http' => array(
            'protocol_version' => $version,
        ),
    );

    if ($connection) {
        $options['http']['header'] = "Connection: $connection";
    }

    $ctx = stream_context_create($options);

    $responses = array("data://text/plain,HTTP/$version 204 No Content\r\n\r\n");
    $pid = http_server('tcp://127.0.0.1:12342', $responses, $output);

    file_get_contents('http://127.0.0.1:12342/', false, $ctx);
    fseek($output, 0, SEEK_SET);
    echo stream_get_contents($output);

    http_server_kill($pid);
}

echo "HTTP/1.0, default behaviour:\n";
do_test('1.0', null);

echo "HTTP/1.0, connection: close:\n";
do_test('1.0', 'close');

echo "HTTP/1.0, connection: keep-alive:\n";
do_test('1.0', 'keep-alive');

echo "HTTP/1.1, default behaviour:\n";
do_test('1.1', null);

echo "HTTP/1.1, connection: close:\n";
do_test('1.1', 'close');

echo "HTTP/1.1, connection: keep-alive:\n";
do_test('1.1', 'keep-alive');
?>
--EXPECT--
HTTP/1.0, default behaviour:
GET / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*

HTTP/1.0, connection: close:
GET / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*
Connection: close

HTTP/1.0, connection: keep-alive:
GET / HTTP/1.0
Host: 127.0.0.1:12342
Accept: */*
Connection: keep-alive

HTTP/1.1, default behaviour:
GET / HTTP/1.1
Host: 127.0.0.1:12342
Accept: */*

HTTP/1.1, connection: close:
GET / HTTP/1.1
Host: 127.0.0.1:12342
Accept: */*
Connection: close

HTTP/1.1, connection: keep-alive:
GET / HTTP/1.1
Host: 127.0.0.1:12342
Accept: */*
Connection: keep-alive
