--TEST--
Test curl_copy_handle() with CURLOPT_XFERINFOFUNCTION
--SKIPIF--
<?php
if (!defined('CURLOPT_XFERINFOFUNCTION')) echo 'skip CURLOPT_XFERINFOFUNCTION not defined';
?>
--ARGS--
--bpc-include-file ext/curl/tests/server.inc \
--FILE--
<?php
include 'server.inc';
$host = curl_cli_server_start();

$url = "{$host}/get.php";
$ch = curl_init($url);

function foo($handle, $dltotal, $dlnow, $ultotal, $ulnow) {
    static $done = false; if (!$done) { echo "Download progress!\n"; $done = true; }
}

curl_setopt($ch, CURLOPT_NOPROGRESS, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_XFERINFOFUNCTION, 'foo');
$ch2 = curl_copy_handle($ch);
echo curl_exec($ch), PHP_EOL;
unset($ch);
echo curl_exec($ch2);

?>
--EXPECT--
Download progress!
Hello World!
Hello World!
Hello World!
Hello World!
