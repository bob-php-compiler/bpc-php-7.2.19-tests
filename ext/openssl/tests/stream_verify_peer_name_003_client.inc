<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientCtx = stream_context_create(array('ssl' => array(
    //'verify_peer' => true,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE,
    'cafile' => getcwd() . '/stream_verify_peer_name_003-ca.pem.tmp'
)));

phpt_wait();
$client = stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx);
var_dump($client);
