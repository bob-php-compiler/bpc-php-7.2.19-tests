--TEST--
Allow host name mismatch when "verify_host" disabled
--ARGS--
--bpc-include-file ext/openssl/tests/CertificateGenerator.inc --bpc-include-file ext/openssl/tests/stream_verify_peer_name_002_client.inc --bpc-include-file ext/openssl/tests/stream_verify_peer_name_002_server.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php

$certFile = 'stream_verify_peer_name_002.pem.tmp';
$cacertFile = 'stream_verify_peer_name_002-ca.pem.tmp';

$actualPeerName = 'stream_verify_peer_name_002';

include 'CertificateGenerator.inc';
$certificateGenerator = new CertificateGenerator();
$certificateGenerator->saveCaCert($cacertFile);
$certificateGenerator->saveNewCertAsFileWithKey($actualPeerName, $certFile);

define('__SELF_BINARY__', './stream_verify_peer_name_002');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('stream_verify_peer_name_002_client.inc', 'stream_verify_peer_name_002_server.inc');
}
?>
--CLEAN--
<?php
@unlink('stream_verify_peer_name_002.pem.tmp');
@unlink('stream_verify_peer_name_002-ca.pem.tmp');
?>
--EXPECTF--
resource(%d) of type (stream)
string(6) "hello
"
