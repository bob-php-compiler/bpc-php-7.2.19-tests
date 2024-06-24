<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientCtx = stream_context_create(array('ssl' => array(
    //'verify_peer' => true,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE,
    'cafile' => getcwd() . '/bug54992-ca.pem.tmp',
    'peer_name' => 'bug54992-expected-peer-name',
)));

phpt_wait();
$client = stream_socket_client($serverUri, $errno, $errstr, 2, $clientFlags, $clientCtx);

var_dump($client);
