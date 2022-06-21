<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientCtx = stream_context_create(array('ssl' => array(
    // FIXME: why glib validate server certificate INSECURE?
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_UNKNOWN_CA | G_TLS_CERTIFICATE_INSECURE),
    'peer_name' => 'stream_verify_peer_name_001'
)));

phpt_wait();
$client = stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags, $clientCtx);
var_dump($client);
var_dump(fgets($client));
fclose($client);
