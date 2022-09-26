--TEST--
ziparchive::count()
--FILE--
<?php

$file = 'test.zip';

$zip = new ZipArchive;
if (!$zip->open($file)) {
	exit('failed');
}

var_dump($zip->numFiles, count($zip), $zip->numFiles == count($zip));
?>
Done
--EXPECTF--
int(4)
int(4)
bool(true)
Done
