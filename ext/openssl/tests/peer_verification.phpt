--TEST--
Peer verification enabled for client streams
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/peer_verification_server.inc --bpc-include-file ext/openssl/tests/peer_verification_client.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'peer_verification.pem.tmp';
$cacertFile = 'peer_verification-ca.pem.tmp';

$peerName = 'peer-verification';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './peer_verification');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('peer_verification_client.inc', 'peer_verification_server.inc');
}
?>
--CLEAN--
<?php
@unlink('peer_verification.pem.tmp');
@unlink('peer_verification-ca.pem.tmp');
?>
--EXPECTF--
bool(false)
bool(false)
resource(%d) of type (stream)
resource(%d) of type (stream)
