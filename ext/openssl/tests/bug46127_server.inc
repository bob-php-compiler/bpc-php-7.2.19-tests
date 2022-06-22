<?php

$serverUri = "ssl://127.0.0.1:64321";
$serverFlags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN;
$serverCtx = stream_context_create(array('ssl' => array(
    'local_cert' => 'bug46127.pem.tmp',
)));

$sock = stream_socket_server($serverUri, $errno, $errstr, $serverFlags, $serverCtx);
phpt_notify();

$link = stream_socket_accept($sock);
fwrite($link, "Sending bug 46127\n");
