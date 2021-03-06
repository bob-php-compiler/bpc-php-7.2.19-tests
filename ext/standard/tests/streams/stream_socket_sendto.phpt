--TEST--
int stream_socket_sendto ( resource $socket , string $data [, int $flags = 0 [, string $address ]] );
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - @phpsp - sao paulo - br
--SKIPIF--
<?php
if (getenv("SKIP_ONLINE_TESTS")) { die('skip: online test'); }
?>
--FILE--
<?php
$serverUri = "tcp://127.0.0.1:31854";
$serverUrl = "http://php.net";
$stringSocket = "out of band data.";
$sock = stream_socket_server($serverUri, $errno, $errstr);

if (is_resource($sock)) {
    var_dump(stream_socket_sendto($sock, $stringSocket));
    //var_dump(stream_socket_sendto($sock, $stringSocket, STREAM_OOB));
    //var_dump(stream_socket_sendto($sock, $stringSocket, STREAM_OOB, $serverUri));
    //var_dump(stream_socket_sendto($sock, $stringSocket, STREAM_OOB, $serverUrl));
} else {
    die("Test stream_socket_enable_crypto has failed; Unable to connect: {$errstr} ({$errno})");
}
?>
--EXPECTF--
Warning: stream_socket_sendto(): sendto on server socket only works with udp/udg in %s on line %d
bool(false)
