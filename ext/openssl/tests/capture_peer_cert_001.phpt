--TEST--
capture_peer_cert context captures on verify failure
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/capture_peer_cert_001_client.inc --bpc-include-file ext/openssl/tests/capture_peer_cert_001_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'capture_peer_cert_001.pem.tmp';
$cacertFile = 'capture_peer_cert_001-ca.pem.tmp';

$peerName = 'capture_peer_cert_001';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './capture_peer_cert_001');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('capture_peer_cert_001_client.inc', 'capture_peer_cert_001_server.inc');
}
?>
--CLEAN--
<?php
@unlink('capture_peer_cert_001.pem.tmp');
@unlink('capture_peer_cert_001-ca.pem.tmp');
?>
--EXPECTF--
string(%d) "capture_peer_cert_001"
