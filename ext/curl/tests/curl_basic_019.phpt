--TEST--
Test curl_getinfo() function with CURLINFO_EFFECTIVE_URL parameter
--CREDITS--
Jean-Marc Fontaine <jmf@durcommefaire.net>
--ARGS--
--bpc-include-file ext/curl/tests/server.inc \
--FILE--
<?php
  include 'server.inc';
  $host = curl_cli_server_start();

  $url = "http://{$host}/get.php?test=";
  $ch  = curl_init();

  curl_setopt($ch, CURLOPT_URL, $url);
  curl_exec($ch);
  $info = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
  var_dump($url == $info);
  curl_close($ch);
?>
===DONE===
--EXPECTF--
Hello World!
Hello World!bool(true)
===DONE===
