<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientCtx = stream_context_create(array('ssl' => array(
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE,
    'peer_name' => 'capture-peer-cert-001',
    'capture_peer_cert' => true,
    'cafile' => getcwd() . '/capture_peer_cert_001-ca.pem.tmp'
)));

phpt_wait();
$client = @stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx);
$cert = stream_context_get_options($clientCtx)['ssl']['peer_certificate'];
var_dump(openssl_x509_parse($cert)['subject']['CN']);
