<?php

$serverUri = "ssl://127.0.0.1:64321";
$serverFlags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN;
$serverCtx = stream_context_create(array('ssl' => array(
    'local_cert' => 'stream_verify_peer_name_002.pem.tmp'
)));

$server = stream_socket_server($serverUri, $errno, $errstr, $serverFlags, $serverCtx);
phpt_notify();

$fp = stream_socket_accept($server, 1);
if ($fp) {
    fwrite($fp, "hello\n");
    fclose($fp);
}
