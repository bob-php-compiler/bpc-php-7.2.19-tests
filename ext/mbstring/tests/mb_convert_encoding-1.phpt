--TEST--
mb_convert_encoding()
--SKIPIF--
<?php extension_loaded('mbstring') or die('skip mbstring not available'); ?>
--INI--
output_handler=
mbstring.language=Japanese
--FILE--
<?php
// EUC-JP string
$euc_jp = '日本語テキストです。01234５６７８９。';

$s = $euc_jp;
$s = mb_convert_encoding($s);
print("MP: $s\n"); // Missing parameter


?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function mb_convert_encoding(): 2 required, 1 provided in %s on line %d
 -- compile-error
