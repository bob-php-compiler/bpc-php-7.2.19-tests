--TEST--
Bug #72333: fwrite() on non-blocking SSL sockets doesn't work
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/bug72333_client.inc --bpc-include-file ext/openssl/tests/bug72333_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'bug72333.pem.tmp';

$peerName = 'bug72333';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './bug72333');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('bug72333_client.inc', 'bug72333_server.inc');
}
?>
--CLEAN--
<?php
@unlink('bug72333.pem.tmp');
?>
--EXPECT--
done
