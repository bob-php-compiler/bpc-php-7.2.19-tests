--TEST--
Bug #27023 (CURLOPT_POSTFIELDS does not parse content types for files)
--INI--
error_reporting = 24575
--ARGS--
--bpc-include-file ext/curl/tests/server.inc \
--FILE--
<?php
// E_ALL & ~E_DEPRECATED = 24575
include 'server.inc';
$host = curl_cli_server_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, 1);
curl_setopt($ch, CURLOPT_URL, "{$host}/get.php?test=file");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$file = curl_file_create('curl_testdata1.txt');
$params = array('file' => $file);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
var_dump(curl_exec($ch));

$file = curl_file_create('curl_testdata1.txt', "text/plain");
$params = array('file' => $file);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
var_dump(curl_exec($ch));

$file = curl_file_create('curl_testdata1.txt', null, "foo.txt");
$params = array('file' => $file);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
var_dump(curl_exec($ch));

$file = curl_file_create('curl_testdata1.txt', "text/plain", "foo.txt");
$params = array('file' => $file);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
var_dump(curl_exec($ch));


curl_close($ch);
?>
--EXPECTF--
string(%d) "curl_testdata1.txt|application/octet-stream"
string(%d) "curl_testdata1.txt|text/plain"
string(%d) "foo.txt|application/octet-stream"
string(%d) "foo.txt|text/plain"
