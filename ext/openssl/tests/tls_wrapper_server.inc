<?php

$flags = STREAM_SERVER_BIND|STREAM_SERVER_LISTEN;
$ctx = stream_context_create(array('ssl' => array(
    'local_cert' => 'streams_crypto_method.pem',
)));

$server = stream_socket_server('tls://127.0.0.1:64321', $errno, $errstr, $flags, $ctx);
phpt_notify();

// Stream Socket Transports currently only support tcp, udp, unix, udg, ssl, tls
// for this phpt test, we target at ssl and tls, @see tls_wrapper_client.inc
for ($i = 0; $i < 2; $i++) {
    $fp = @stream_socket_accept($server, 3);
    if ($fp) {
        // ssl connection not fully established util send or receive data on the connection
        fwrite($fp, "hello\n");
        fclose($fp);
    }
}
