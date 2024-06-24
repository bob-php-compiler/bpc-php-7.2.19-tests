--TEST--
Bug #54992: Stream not closed and error not returned when SSL CN_match fails
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/bug54992_client.inc --bpc-include-file ext/openssl/tests/bug54992_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'bug54992.pem.tmp';
$cacertFile = 'bug54992-ca.pem.tmp';

$peerName = 'bug54992-actual-peer-name';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './bug54992');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('bug54992_client.inc', 'bug54992_server.inc');
}
?>
--CLEAN--
<?php
@unlink('bug54992.pem.tmp');
@unlink('bug54992-ca.pem.tmp');
?>
--EXPECTF--
Warning: stream_socket_client(): unable to connect to ssl://127.0.0.1:64321 (Unacceptable TLS certificate) in %s on line %d
bool(false)
