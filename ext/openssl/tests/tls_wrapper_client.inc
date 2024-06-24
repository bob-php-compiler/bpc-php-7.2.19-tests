<?php

$flags = STREAM_CLIENT_CONNECT;
$ctx = stream_context_create(array('ssl' => array(
    // 'verify_peer' => false,
    // 'verify_peer_name' => false,
    // limited context parameter support
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_UNKNOWN_CA | G_TLS_CERTIFICATE_BAD_IDENTITY | G_TLS_CERTIFICATE_EXPIRED | G_TLS_CERTIFICATE_INSECURE)
)));

phpt_wait();

//$client = stream_socket_client("tlsv1.0://127.0.0.1:64321", $errno, $errstr, 3, $flags, $ctx);
//var_dump($client);

//$client = @stream_socket_client("sslv3://127.0.0.1:64321", $errno, $errstr, 3, $flags, $ctx);
//var_dump($client);

//$client = @stream_socket_client("tlsv1.1://127.0.0.1:64321", $errno, $errstr, 3, $flags, $ctx);
//var_dump($client);

//$client = @stream_socket_client("tlsv1.2://127.0.0.1:64321", $errno, $errstr, 3, $flags, $ctx);
//var_dump($client);

$client = @stream_socket_client("ssl://127.0.0.1:64321", $errno, $errstr, 3, $flags, $ctx);
var_dump($client);
var_dump(fgets($client));
fclose($client);

$client = @stream_socket_client("tls://127.0.0.1:64321", $errno, $errstr, 3, $flags, $ctx);
var_dump($client);
var_dump(fgets($client));
fclose($client);
