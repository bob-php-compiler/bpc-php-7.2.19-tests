--TEST--
close() called twice
--FILE--
<?php

echo "Procedural\n";
$zip = zip_open('test.zip');
if (!is_resource($zip)) {
	die("Failure");
	}
var_dump(zip_close($zip));
var_dump(zip_close($zip));

echo "Object\n";
$zip = new ZipArchive();
if (!$zip->open('test.zip')) {
	die('Failure');
}
if ($zip->status == ZIPARCHIVE::ER_OK) {
	var_dump($zip->close());
	var_dump($zip->close());
} else {
	die("Failure");
}

?>
Done
--EXPECTF--
Procedural
NULL

Warning: zip_close(): supplied resource is not a valid Zip Directory resource in %s
bool(false)
Object
bool(true)

Warning: ZipArchive::close(): Invalid or uninitialized Zip object in %s
bool(false)
Done
