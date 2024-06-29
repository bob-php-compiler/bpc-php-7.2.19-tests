--TEST--
Bug #76705: feof might hang on TLS streams in case of fragmented TLS records
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/bug77390_client.inc --bpc-include-file ext/openssl/tests/bug77390_server.inc --bpc-include-file ext/openssl/tests/bug77390_proxy.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'bug77390.pem.tmp';
$cacertFile = 'bug77390-ca.pem.tmp';

$peerName = 'bug77390';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($peerName, $certFile);

define('__SELF_BINARY__', './bug77390');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('bug77390_client.inc', [
        'server' => 'bug77390_server.inc',
        'proxy' => 'bug77390_proxy.inc'
    ]);
}
?>
--CLEAN--
<?php
@unlink('bug77390.pem.tmp');
@unlink('bug77390-ca.pem.tmp');
?>
--EXPECT--
string(12) "hello, world"
