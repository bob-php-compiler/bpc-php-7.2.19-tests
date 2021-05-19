--TEST--
mb_detect_encoding()
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--INI--
mbstring.language=Japanese
--FILE--
<?php
// EUC-JP string
$euc_jp = '日本語テキストです。01234５６７８９。';

$s = $euc_jp;
$s = mb_detect_encoding();
print("MP: $s\n"); // Missing parameter

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mb_detect_encoding(): 1 required, 0 provided in %s on line %d
 -- compile-error
