--TEST--
stat() on directory should return 40755 for ftp://
--SKIPIF--
skip not support ftp:// or ftps://
--FILE--
<?php

require __DIR__ . "/../../../ftp/tests/server.inc";

$path = "ftp://localhost:" . $port."/www";

var_dump(stat($path)['mode']);
?>
==DONE==
--EXPECTF--
string(11) "SIZE /www
"
int(16877)
==DONE==
