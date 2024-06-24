--TEST--
Bug #65538: SSL context "cafile" disallows URL stream wrappers
--FILE--
<?php
$clientCtx = stream_context_create(array('ssl' => array(
    // We don't get any ca list from php.net but it does not matter as we
    // care about the fact that the external stream is not allowed.
    // We can't use http://curl.haxx.se/ca/cacert.pem for this test
    // as it is redirected to https which means the test would depend
    // on system cafile when opening stream.
    'cafile' => 'http://www.nginx.org',
)));
var_dump(file_get_contents('https://github.com', false, $clientCtx));
?>
--EXPECTF--
Warning: file_get_contents(https://github.com): error setting certificate file: http://www.nginx.org in %s on line %d
bool(false)
