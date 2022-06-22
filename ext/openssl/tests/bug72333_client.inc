<?php

$context = stream_context_create(array('ssl' => array(
    //'verify_peer' => false,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_UNKNOWN_CA | G_TLS_CERTIFICATE_INSECURE),
    'peer_name' => 'bug72333'
)));

phpt_wait();
$fp = stream_socket_client("ssl://127.0.0.1:10011", $errornum, $errorstr, 3000, STREAM_CLIENT_CONNECT, $context);
stream_set_blocking($fp, false);

function blocking_fwrite($fp, $buf) {
    $write = array($fp);
    $total = 0;
    while (stream_select($read, $write, $except, 1)) {
        $result = fwrite($fp, $buf);
        if (!$result) {
            break;
        }
        $total += $result;
        if ($total >= strlen($buf)) {
            return $total;
        }
        $buf = substr($buf, $total);
    }
}
$str1 = str_repeat("a", 4000000);
blocking_fwrite($fp, $str1);
phpt_notify();
echo "done";
