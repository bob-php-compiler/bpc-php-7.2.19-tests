--TEST--
Bug #72258 ZipArchive converts filenames to unrecoverable form
--FILE--
<?php

$fn = "bug72258.zip";

$zip = new ZipArchive();
$res = $zip->open($fn);
if ($res !== true) {
		echo 'Error opening: ' . $res;
			die();
}

for ($i = 0; $i < $zip->numFiles; $i++) {
	$fnInArc = $zip->getNameIndex($i, ZipArchive::FL_ENC_RAW);
	var_dump($fnInArc);
}
?>
--EXPECT--
string(6) "ÄÅÇÉÑ/"
