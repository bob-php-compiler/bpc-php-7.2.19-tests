--TEST--
Bug #73172 parse error: Invalid numeric literal
--ARGS--
--bpc-include-file tests/lang/bug73172.inc
--FILE--
<?php

setlocale(LC_ALL, 'fr_FR.utf8', 'fra');

include dirname(__FILE__) . DIRECTORY_SEPARATOR . "bug73172.inc";

?>
==DONE==
--EXPECTF--
==DONE==
