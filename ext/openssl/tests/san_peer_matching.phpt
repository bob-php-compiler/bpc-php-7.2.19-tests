--TEST--
Peer verification matches SAN names
--ARGS--
--bpc-include-file ext/openssl/tests/san_peer_matching_server.inc --bpc-include-file ext/openssl/tests/san_peer_matching_client.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php

define('__SELF_BINARY__', './san_peer_matching');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('san_peer_matching_client.inc', 'san_peer_matching_server.inc');
}
?>
--EXPECTF--
resource(%d) of type (stream)

Warning: stream_socket_client(): unable to connect to ssl://127.0.0.1:64321 (Unacceptable TLS certificate) in %s on line %d
bool(false)
