<?php

$serverUri = "ssl://127.0.0.1:64321";
$serverFlags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN;
$serverCtx = stream_context_create(array('ssl' => array(
    'local_cert' => 'san-cert.pem',
)));

$server = stream_socket_server($serverUri, $errno, $errstr, $serverFlags, $serverCtx);
phpt_notify();

@stream_socket_accept($server, 1);

@stream_socket_accept($server, 1);
