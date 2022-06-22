<?php

$context = stream_context_create(array('ssl' => array('local_cert' => 'bug72333.pem.tmp')));

$flags = STREAM_SERVER_BIND|STREAM_SERVER_LISTEN;
$fp = stream_socket_server("ssl://127.0.0.1:10011", $errornum, $errorstr, $flags, $context);
phpt_notify();
$conn = stream_socket_accept($fp);
$total = 100000;
$result = fread($conn, $total);
stream_set_blocking($conn, false);
usleep(50000);
$read = array($conn);
while (stream_select($read, $write, $except, 1)) {
    $result = fread($conn, 100000);
    if (!$result) {
        break;
    }
    $total += strlen($result);
    if ($total >= 4000000) {
        break;
    }
}
phpt_wait();
