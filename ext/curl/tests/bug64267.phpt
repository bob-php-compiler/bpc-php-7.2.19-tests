--TEST--
Bug #64267 (CURLOPT_INFILE doesn't allow reset)
--SKIPIF--
<?php
if (getenv("SKIP_ONLINE_TESTS")) die("skip online test");
extension_loaded("curl") or die("skip need ext/curl");
?>
--FILE--
<?php

echo "TEST\n";

$c = curl_init("http://weibo.com");
$f = fopen('bug64267.php',"r");
var_dump(curl_setopt_array($c, array(
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_UPLOAD => true,
	CURLOPT_INFILE => $f,
	CURLOPT_INFILESIZE => filesize('bug64267.php'),
	CURLOPT_CONNECTTIMEOUT => 3,
	CURLOPT_TIMEOUT => 3,
)));
fclose($f);
var_dump(curl_setopt_array($c, array(
	CURLOPT_UPLOAD => false,
	CURLOPT_INFILE => null,
	CURLOPT_INFILESIZE => 0,
)));
curl_exec($c);
var_dump(curl_getinfo($c, CURLINFO_RESPONSE_CODE));
?>
===DONE===
--EXPECTF--
TEST
bool(true)
bool(true)
int(30%d)
===DONE===
