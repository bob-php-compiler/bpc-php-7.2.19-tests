--TEST--
ZipArchive Bug #76524 (memory leak with ZipArchive::OVERWRITE flag and empty archive)
--FILE--
<?php

$i = 0;
do {
	$filename = "nonexistent" . ($i++) . ".zip";
} while (file_exists($filename));

$zip = new ZipArchive();
$zip->open($filename, ZipArchive::CREATE | ZipArchive::OVERWRITE);
echo 'ok';

/* Zip-related error messages depend on platform and libzip version,
   so the regex is used to check that Zend MM does NOT show warnings
   about leaks: */
?>
--EXPECTREGEX--
ok((?!memory leaks detected).)*
