--TEST--
Bug #72771. FTPS to FTP downgrade not allowed when server doesn't support AUTH TLS or AUTH SSL.
--SKIPIF--
skip not support ftp:// or ftps://
--FILE--
<?php

require __DIR__ . "/../../../ftp/tests/server.inc";

$path="ftps://127.0.0.1:" . $port."/";

$ds=opendir($path, $context);
var_dump($ds);
?>
==DONE==
--EXPECTF--
Warning: opendir(ftps://127.0.0.1:%d/): failed to open dir: Server doesn't support FTPS. in %s on line %d
bool(false)
==DONE==
