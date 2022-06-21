--TEST--
tls stream wrapper
--ARGS--
--bpc-include-file ext/openssl/tests/tls_wrapper_server.inc --bpc-include-file ext/openssl/tests/tls_wrapper_client.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase-constants.inc --bpc-include-file ext/openssl/tests/ServerClientTestCase.inc \
--FILE--
<?php

define('__SELF_BINARY__', './tls_wrapper');

include 'ServerClientTestCase-constants.inc';
include 'ServerClientTestCase.inc';

if (isset($argv[1]) && $argv[1] === WORKER_ARGV_VALUE) {
    ServerClientTestCase::getInstance(true)->runWorker();
} else {
    ServerClientTestCase::getInstance()->run('tls_wrapper_client.inc', 'tls_wrapper_server.inc');
}
?>
--EXPECTF--
resource(%d) of type (stream)
string(6) "hello
"
resource(10) of type (stream)
string(%d) "hello
"
