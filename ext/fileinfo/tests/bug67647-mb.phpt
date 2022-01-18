--TEST--
Bug #67647: Bundled libmagic 5.17 does not detect quicktime files correctly
--SKIPIF--
<?php
	if (ini_get("default_charset") != "UTF-8") {
		die("skip require default_charset == UTF-8");
	}
?>
--FILE--
<?php

$src = "67647.mov";

$f = "67647私はガラスを食べられます.mov";

/* Streams mb path support is tested a lot elsewhere. Copy the existing file
	therefore, avoid duplication in the repo. */
if (!copy($src, $f) || empty(glob($f))) {
	die("failed to copy '$src' to '$f'");
}

$fi = new finfo(FILEINFO_MIME_TYPE);
var_dump($fi->file($f));

?>
+++DONE+++
--CLEAN--
<?php
	unlink("67647私はガラスを食べられます.mov");
?>
--EXPECT--
string(15) "video/quicktime"
+++DONE+++
