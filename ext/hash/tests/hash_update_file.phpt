--TEST--
hash_update_file() function - basic test
--CREDITS--
marcosptf - <marcosptf@yahoo.com.br> - @phpsp - sao paulo - br
--FILE--
<?php
$filePath = 'hash_update_stream.txt';
file_put_contents($filePath, 'The quick brown fox jumped over the lazy dog.');

$ctx = hash_init('md5');
var_dump(hash_update_file($ctx, $filePath));
echo hash_final($ctx);
?>
--EXPECT--
bool(true)
5c6ffbdd40d9556b73a21e63c3e0e904
--CLEAN--
<?php
unlink('hash_update_stream.txt');
?>
