--TEST--
Bug #65538: SSL context "cafile" supports stream wrappers
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/bug65538_001_client.inc --bpc-include-file ext/openssl/tests/bug65538_001_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'bug65538_001.pem.tmp';
$cacertFile = 'bug65538_001-ca.pem.tmp';

$peerName = 'bug65538_001';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './bug65538_001');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('bug65538_001_client.inc', 'bug65538_001_server.inc');
}
?>
--CLEAN--
<?php
@unlink('bug65538_001.pem.tmp');
@unlink('bug65538_001-ca.pem.tmp');
?>
--EXPECT--
string(12) "Hello World!"
