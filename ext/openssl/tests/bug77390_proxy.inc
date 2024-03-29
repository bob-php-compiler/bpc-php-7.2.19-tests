<?php

phpt_wait();

$upstream = stream_socket_client("tcp://127.0.0.1:10011", $errornum, $errorstr, 3000, STREAM_CLIENT_CONNECT);
stream_set_blocking($upstream, false);

$flags = STREAM_SERVER_BIND|STREAM_SERVER_LISTEN;
$server = stream_socket_server("tcp://127.0.0.1:10012", $errornum, $errorstr, $flags);
phpt_notify();

$conn = stream_socket_accept($server);
stream_set_blocking($conn, false);

$read = array($upstream, $conn);
while (stream_select($read, $write, $except, 1)) {
    foreach ($read as $fp) {
        $data = stream_get_contents($fp);
        if ($fp === $conn) {
            fwrite($upstream, $data);
        } else {
            if ($data !== '' && $data[0] === chr(23)) {
                $parts = str_split($data, (int) ceil(strlen($data) / 3));
                foreach ($parts as $part) {
                    fwrite($conn, $part);
                    phpt_wait(null, 1);
                }
            } else {
                fwrite($conn, $data);
            }
        }
    }
    if (feof($upstream)) {
        break;
    }
    $read = array($upstream, $conn);
}

phpt_wait();
