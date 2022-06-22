<?php

$context = stream_context_create(array('ssl' => array(
    //'verify_peer' => false,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~(G_TLS_CERTIFICATE_UNKNOWN_CA | G_TLS_CERTIFICATE_INSECURE),
    'peer_name' => 'bug77390'
)));

phpt_wait('server');
phpt_notify('proxy');

phpt_wait('proxy');
$fp = stream_socket_client("ssl://127.0.0.1:10012", $errornum, $errorstr, 3000, STREAM_CLIENT_CONNECT, $context);
stream_set_blocking($fp, false);

$read = array($fp);
$buf = '';
$emptyChunkPrinted = false;
$warmedUp = false;
while (stream_select($read, $write, $except, 1000)) {
    $chunk = stream_get_contents($fp, 4096);
    $buf .= $chunk;
    phpt_notify('proxy');
    if (!$warmedUp) {
        if ($buf !== 'warmup') {
            continue;
        }
        $warmedUp = true;
        $buf = '';
        phpt_notify('server');
        continue;
    }
    if ($chunk !== '' || !$emptyChunkPrinted) {
        $emptyChunkPrinted = true;
        var_dump($chunk);
    }
    if ($buf === 'hello, world') {
        break;
    }
}

phpt_notify('server');
phpt_notify('proxy');
