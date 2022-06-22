<?php

function streamRead($stream) {
    return strlen(fread($stream, 8192));
}

function streamWrite($stream, $data) {
    return fwrite($stream, $data);
}

function waitForWrite($streams) {
    $read = null;
    $except = null;
    while($streams && !($n = stream_select($read, $streams, $except, 1)));
    return $n > 0;
}

function waitForRead($streams) {
    $write = null;
    $except = null;
    while ($streams && !($n = stream_select($streams, $write, $except, 1)));
    return $n > 0;
}

set_error_handler(function ($errno, $errstr) {
    exit("$errstr\n");
});

$serverUri = "tcp://127.0.0.1:10012";
$clientFlags = STREAM_CLIENT_CONNECT;
$clientOptions = array(
    //'verify_peer' => true,
    'tls_validation_flags' => G_TLS_CERTIFICATE_VALIDATE_ALL & ~G_TLS_CERTIFICATE_INSECURE,
    'cafile' => getcwd() . '/bug74159-ca.pem.tmp',
    'peer_name' => 'bug74159',
);

phpt_wait();

$fp = stream_socket_client($serverUri, $errno, $errstr, 1, $clientFlags);

stream_set_blocking($fp, false);
while (0 === ($n = stream_socket_enable_crypto($fp, true, STREAM_CRYPTO_METHOD_TLS_CLIENT, $clientOptions)));

$data = str_repeat("a", 0xfffff);
$written = 0;
$total = $written;
while(!empty($data)) {
    $written = streamWrite($fp, $data);
    $total += $written;
    $data = substr($data, $written);
    waitForWrite(array($fp));
}
printf("Written %d bytes\n", $total);

while(waitForRead(array($fp))) {
    streamRead($fp);
    if (feof($fp)) {
        break;
    }
}

exit("DONE\n");
