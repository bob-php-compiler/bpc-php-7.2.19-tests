--TEST--
getNameIndex
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php
include __DIR__ . '/utils.inc';
$file = '__tmp_oo_rename.zip';

@unlink($file);

$zip = new ZipArchive;
if (!$zip->open($file, ZIPARCHIVE::CREATE)) {
	exit('failed');
}

$zip->addFromString('entry1.txt', 'entry #1');
$zip->addFromString('entry2.txt', 'entry #2');
$zip->addFromString('dir/entry2d.txt', 'entry #2');

if (!$zip->status == ZIPARCHIVE::ER_OK) {
	echo "failed to write zip\n";
}
$zip->close();

if (!$zip->open($file)) {
	exit('failed');
}


var_dump($zip->getNameIndex(0));
var_dump($zip->getNameIndex(1));
var_dump($zip->getNameIndex(2));
var_dump($zip->getNameIndex(3));

$zip->close();

?>
--EXPECTF--
string(10) "entry1.txt"
string(10) "entry2.txt"
string(15) "dir/entry2d.txt"
bool(false)
