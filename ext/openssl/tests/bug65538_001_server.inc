<?php

$serverUri = "ssl://127.0.0.1:64321";
$serverFlags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN;
$serverCtx = stream_context_create(array('ssl' => array(
    'local_cert' => 'bug65538_001.pem.tmp',
)));

$server = stream_socket_server($serverUri, $errno, $errstr, $serverFlags, $serverCtx);
phpt_notify();

$client = @stream_socket_accept($server);
if ($client) {
    $in = '';
    while (!preg_match('/\r?\n\r?\n/', $in)) {
        $in .= fread($client, 2048);
    }
    $response = "HTTP/1.0 200 OK\r\n"
              . "Content-Type: text/plain\r\n"
              . "Content-Length: 12\r\n"
              . "Connection: close\r\n"
              . "\r\n"
              . "Hello World!";
    fwrite($client, $response);
    fclose($client);
}
