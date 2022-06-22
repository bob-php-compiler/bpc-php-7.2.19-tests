<?php

$context = stream_context_create(array('ssl' => array('local_cert' => 'bug77390.pem.tmp')));

$flags = STREAM_SERVER_BIND|STREAM_SERVER_LISTEN;
$fp = stream_socket_server("ssl://127.0.0.1:10011", $errornum, $errorstr, $flags, $context);
phpt_notify();

$conn = stream_socket_accept($fp);
fwrite($conn, 'warmup');
phpt_wait();
fwrite($conn, 'hello, world');

phpt_wait();
fclose($conn);
