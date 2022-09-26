--TEST--
Bug #64342 ZipArchive::addFile() has to check file existence (variation 2)
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php

include __DIR__ . '/utils.inc';
$file = '__私はガラスを食べられますtmp_oo_addfile.zip';

copy('test.zip', $file);

$zip = new ZipArchive;
if (!$zip->open($file)) {
	exit('failed');
}
if (!$zip->addFile('cant_find_me.txt', 'test.php')) {
	echo "failed\n";
}
if ($zip->status == ZIPARCHIVE::ER_OK) {
	dump_entries_name($zip);
	$zip->close();
} else {
	echo "failed\n";
}
@unlink($file);
?>
--EXPECTF--
failed
0 bar
1 foobar/
2 foobar/baz
3 entry1.txt
