--TEST--
Host name mismatch triggers error
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/stream_verify_peer_name_003_client.inc --bpc-include-file ext/openssl/tests/stream_verify_peer_name_003_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'stream_verify_peer_name_003.pem.tmp';
$cacertFile = 'stream_verify_peer_name_003-ca.pem.tmp';

$actualPeerName = 'stream_verify_peer_name_003';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($actualPeerName, $certFile);

define('__SELF_BINARY__', './stream_verify_peer_name_003');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('stream_verify_peer_name_003_client.inc', 'stream_verify_peer_name_003_server.inc');
}
?>
--CLEAN--
<?php
@unlink('stream_verify_peer_name_003.pem.tmp');
@unlink('stream_verify_peer_name_003-ca.pem.tmp');
?>
--EXPECTF--
Warning: stream_socket_client(): unable to connect to ssl://127.0.0.1:64321 (Unacceptable TLS certificate) in %s on line %d
bool(false)
