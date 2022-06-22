<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;

$clientCtx = stream_context_create(array('ssl' => array(
    //'verify_peer' => false,
    //'verify_peer_name' => false
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_UNKNOWN_CA | G_TLS_CERTIFICATE_BAD_IDENTITY | G_TLS_CERTIFICATE_INSECURE)
)));

phpt_wait();
$sock = stream_socket_client($serverUri, $errno, $errstr, 2, $clientFlags, $clientCtx);

echo fgets($sock);
