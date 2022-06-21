<?php

$serverUri = "ssl://127.0.0.1:64321";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientCtx = stream_context_create(array('ssl' => array(
    //'verify_peer' => true,
    //'verify_peer_name' => false,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_BAD_IDENTITY | G_TLS_CERTIFICATE_INSECURE),
    'cafile' => getcwd() . '/stream_verify_peer_name_002-ca.pem.tmp'
)));

phpt_wait();
$client = stream_socket_client($serverUri, $errno, $errstr, 2, $clientFlags, $clientCtx);
var_dump($client);
var_dump(fgets($client));
fclose($client);
