--TEST--
ziparchive::addFile() function
--ARGS--
--bpc-include-file ext/zip/tests/utils.inc \
--FILE--
<?php

include __DIR__ . '/utils.inc';
$file = '__tmp_oo_addfile.zip';

copy('test.zip', $file);

$zip = new ZipArchive;
if (!$zip->open($file)) {
	exit('failed');
}
if (!$zip->addFile('utils.inc', 'test.php')) {
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
0 bar
1 foobar/
2 foobar/baz
3 entry1.txt
4 test.php
