--TEST--
finfo_file(): Testing mime types
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php

$fp = finfo_open(FILEINFO_MIME_TYPE);
$results = array();

foreach (glob("resources/*") as $filename) {
	if (is_file($filename)) {
		$results["$filename"] = finfo_file($fp, $filename);
	}
}
ksort($results);

var_dump($results);
?>
--EXPECTF--
array(9) {
  ["resources/dir.zip"]=>
  string(15) "application/zip"
  ["resources/test.awk"]=>
  string(10) "text/plain"
  ["resources/test.bmp"]=>
  string(14) "image/x-ms-bmp"
  ["resources/test.gif"]=>
  string(9) "image/gif"
  ["resources/test.jpg"]=>
  string(10) "image/jpeg"
  ["resources/test.mp3"]=>
  string(10) "audio/mpeg"
  ["resources/test.pdf"]=>
  string(15) "application/pdf"
  ["resources/test.png"]=>
  string(9) "image/png"
  ["resources/test.ppt"]=>
  string(29) "application/vnd.ms-powerpoint"
}
