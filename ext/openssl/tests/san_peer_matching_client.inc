<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientCtx = stream_context_create(array('ssl' => array(
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_EXPIRED | G_TLS_CERTIFICATE_INSECURE),
    'cafile' => getcwd() . '/san-ca.pem',
)));

phpt_wait();

stream_context_set_option($clientCtx, 'ssl', 'peer_name', 'example.org');
var_dump(stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx));

stream_context_set_option($clientCtx, 'ssl', 'peer_name', 'moar.example.org');
var_dump(stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx));
