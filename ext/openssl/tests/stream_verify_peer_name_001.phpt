--TEST--
Verify host name by default in client transfers
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/stream_verify_peer_name_001_client.inc --bpc-include-file ext/openssl/tests/stream_verify_peer_name_001_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'stream_verify_peer_name_001.pem.tmp';
$peerName = 'stream_verify_peer_name_001';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './stream_verify_peer_name_001');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('stream_verify_peer_name_001_client.inc', 'stream_verify_peer_name_001_server.inc');
}
?>
--CLEAN--
<?php
@unlink('stream_verify_peer_name_001.pem.tmp');
?>
--EXPECTF--
resource(%d) of type (stream)
