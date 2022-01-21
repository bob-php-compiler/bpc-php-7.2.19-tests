--TEST--
Test curl_init() function with basic functionality
--CREDITS--
Jean-Marc Fontaine <jmf@durcommefaire.net>
--ARGS--
--bpc-include-file ext/curl/tests/server.inc \
--FILE--
<?php
  $ch = curl_init();
  var_dump($ch);
?>
===DONE===
--EXPECTF--
resource(%d) of type (curl)
===DONE===
