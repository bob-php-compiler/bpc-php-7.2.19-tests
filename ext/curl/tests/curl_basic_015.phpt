--TEST--
Test curl_init() function with $url parameter defined
--CREDITS--
Jean-Marc Fontaine <jmf@durcommefaire.net>
--ARGS--
--bpc-include-file ext/curl/tests/server.inc \
--FILE--
<?php
  $url = 'http://www.example.com/';
  $ch  = curl_init($url);
  var_dump($url == curl_getinfo($ch, CURLINFO_EFFECTIVE_URL));
?>
===DONE===
--EXPECTF--
bool(true)
===DONE===
