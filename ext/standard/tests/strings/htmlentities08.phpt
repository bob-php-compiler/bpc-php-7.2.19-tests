--TEST--
htmlentities() test 8 (mbstring / EUC-JP)
--INI--
output_handler=
error_reporting=-2049
mbstring.internal_encoding=EUC-JP
--SKIPIF--
<?php
	extension_loaded("mbstring") or die("skip mbstring not available\n");
--FILE--
<?php
// ~E_STRICT = -2049
	mb_internal_encoding('EUC-JP');
	print mb_internal_encoding()."\n";
	var_dump(htmlentities("\xa1\xa2\xa1\xa3\xa1\xa4", ENT_QUOTES, ''));
?>
--EXPECT--
EUC-JP
string(6) "������"
