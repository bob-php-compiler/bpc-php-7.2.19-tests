--TEST--
Bug #73457. Wrong error message when fopen FTP wrapped fails to open data connection
--SKIPIF--
skip not support ftp:// or ftps://
--FILE--
<?php

$bug73457=true;
require __DIR__ . "/../../../ftp/tests/server.inc";

$path="ftp://127.0.0.1:" . $port."/bug73457";

$ds=file_get_contents($path);
var_dump($ds);
?>
==DONE==
--EXPECTF--
Warning: file_get_contents(ftp://127.0.0.1:%d/bug73457): failed to open stream: Failed to set up data channel: Connection refused in %s on line %d
bool(false)
==DONE==
