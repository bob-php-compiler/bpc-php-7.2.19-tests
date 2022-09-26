--TEST--
Bug #8009 (cannot add again same entry to an archive)
--FILE--
<?php
$src = "bug8009.zip";
$filename = "tmp8009.zip";
copy($src, $filename);

$zip = new ZipArchive();

if (!$zip->open($filename)) {
       exit("cannot open $filename\n");
}
$zip->addFromString("2.txt", "=)");
$zip->close();
unlink($filename);
echo "status: " . $zip->status . "\n";
echo "\n";
--EXPECT--
status: 0
