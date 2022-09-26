--TEST--
zip::open() function
--FILE--
<?php

$zip = new ZipArchive;
$r = $zip->open('nofile');
if ($r !== TRUE) {
	echo "ER_OPEN: ok\n";
} else {
	echo "ER_OPEN: FAILED\n";
}

$r = $zip->open('nofile', ZIPARCHIVE::CREATE);
if (!$r) {
	echo "create: failed\n";
} else {
	echo "create: ok\n";
}
@unlink('nofile');

$zip = new ZipArchive;
$zip->open('');

if (!$zip->open('test.zip')) {
	exit("failed 1\n");
}

if ($zip->status == ZIPARCHIVE::ER_OK) {
	echo "OK\n";
} else {
	echo "failed\n";
}
?>
--EXPECTF--
ER_OPEN: ok
create: ok

Warning: ZipArchive::open(): Empty string as source in %s on line %d
OK
