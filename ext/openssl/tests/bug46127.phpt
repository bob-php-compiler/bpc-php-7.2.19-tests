--TEST--
#46127 php_openssl_tcp_sockop_accept forgets to set context on accepted stream
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/bug46127_client.inc --bpc-include-file ext/openssl/tests/bug46127_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php
$certFile = 'bug46127.pem.tmp';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveNewCertAsFileWithKey('bug46127', $certFile);

define('__SELF_BINARY__', './bug46127');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('bug46127_client.inc', 'bug46127_server.inc');
}
?>
--CLEAN--
<?php
@unlink('bug46127.pem.tmp');
?>
--EXPECT--
Sending bug 46127
