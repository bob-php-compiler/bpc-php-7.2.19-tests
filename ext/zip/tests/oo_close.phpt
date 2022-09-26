--TEST--
zip::close() function
--FILE--
<?php

$zip = new ZipArchive;
if (!$zip->open('test.zip')) {
	exit('failed');
}

if ($zip->status == ZIPARCHIVE::ER_OK) {
	$zip->close();
	echo "ok\n";
} else {
	echo "failed\n";
}
?>
--EXPECTF--
ok
