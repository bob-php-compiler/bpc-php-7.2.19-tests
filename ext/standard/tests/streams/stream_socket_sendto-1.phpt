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
$stringFWrite = "normal data to transmit";
$sock = stream_socket_server($serverUri, $errno, $errstr);

if (is_resource($sock)) {
    fwrite($sock, $stringFWrite);
} else {
    die("Test stream_socket_enable_crypto has failed; Unable to connect: {$errstr} ({$errno})");
}
?>
--EXPECTF--
Fatal error: stream-write: unsupport stream in %s on line %d
