--TEST--
Recursive mkdir() on ftp should create missing directories.
--SKIPIF--
skip not support ftp:// or ftps://
--FILE--
<?php
$bug77680=1;

require __DIR__ . "/../../../ftp/tests/server.inc";

$path = "ftp://localhost:" . $port."/one/two/three/";
mkdir($path, 0755, true);

?>
==DONE==
--EXPECTF--
string(20) "CWD /one/two/three
"
string(14) "CWD /one/two
"
string(10) "CWD /one
"
string(7) "CWD /
"
string(7) "MKD /
"
string(10) "MKD /one
"
string(14) "MKD /one/two
"
string(20) "MKD /one/two/three
"
==DONE==
