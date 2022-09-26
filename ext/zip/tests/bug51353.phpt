--TEST--
Bug #51353 ZIP64 problem, archive with 100000 items
--FILE--
<?php
/* This test might get very long depending on the mashine it's running on. Therefore
adding an explicit skip, remove it to run this test. */
set_time_limit(0);

/* Either we ship a file with 100000 entries which would be >12M big,
	or create it dynamically. */
$zip = new ZipArchive;
$r = $zip->open("51353.zip", ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);
if ($r) {
	for ($i = 0; $i < 100000; $i++) {
		$zip->addFromString("$i.txt", '1');
	}
	$zip->close();
} else {
	die("failed");
}

$zip = new ZipArchive;
$r = $zip->open("51353.zip");
if ($r) {
	$zip->extractTo("51353_unpack");
	$zip->close();

	$a = glob("51353_unpack/*.txt");
	echo count($a) . "\n";
} else {
	die("failed");
}

echo "OK";
--CLEAN--
<?php
unlink("51353.zip");

$a = glob("51353_unpack/*.txt");
foreach($a as $f) {
	unlink($f);
}
rmdir("51353_unpack");
--EXPECT--
100000
OK
