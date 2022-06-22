--TEST--
Bug #74159: Writing a large buffer to non-blocking encrypted streams fails
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/bug74159_client.inc --bpc-include-file ext/openssl/tests/bug74159_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'bug74159.pem.tmp';
$cacertFile = 'bug74159-ca.pem.tmp';

$peerName = 'bug74159';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './bug74159');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('bug74159_client.inc', 'bug74159_server.inc');
}
?>
--CLEAN--
<?php
@unlink('bug74159.pem.tmp');
@unlink('bug74159-ca.pem.tmp');
?>
--EXPECT--
Written 1048575 bytes
DONE
