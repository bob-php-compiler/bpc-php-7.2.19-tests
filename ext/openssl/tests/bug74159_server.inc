<?php

$serverUri = "ssl://127.0.0.1:10012";
$serverFlags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN;
$serverCtx = stream_context_create(array('ssl' => array(
    'local_cert' => 'bug74159.pem.tmp',
    // 'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_2_SERVER,
)));

$server = stream_socket_server($serverUri, $errno, $errstr, $serverFlags, $serverCtx);
phpt_notify();

$client = stream_socket_accept($server, 1);

if (!$client) {
    exit();
}

$data = '';
while (strlen($data) < 0xfffff) {
    $buffer = fread($client, 8192);
    if (empty($buffer)) {
        exit();
    }
    $data .= $buffer;
    usleep(100);
}

fclose($client);
