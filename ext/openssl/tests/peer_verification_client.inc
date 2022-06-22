<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$caFile = getcwd() . '/peer_verification-ca.pem.tmp';

phpt_wait();

// Expected to fail -- untrusted server cert and no CA File present
$clientCtx = stream_context_create(array('ssl' => array(
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE
)));
var_dump(@stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx));

// Expected to fail -- untrusted server cert and no CA File present
$clientCtx = stream_context_create(array('ssl' => array(
    'verify_peer' => true,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE
)));
var_dump(@stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx));

// Should succeed with peer verification disabled in context
$clientCtx = stream_context_create(array('ssl' => array(
    //'verify_peer' => false,
    //'verify_peer_name' => false,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_UNKNOWN_CA | G_TLS_CERTIFICATE_BAD_IDENTITY | G_TLS_CERTIFICATE_INSECURE)
)));
var_dump(stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx));

// Should succeed with CA file specified in context
$clientCtx = stream_context_create(array('ssl' => array(
    'cafile'   => $caFile,
    'peer_name' => 'peer_verification',
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE
)));
var_dump(stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx));
