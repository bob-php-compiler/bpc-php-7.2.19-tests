--TEST--
Bug #68735 fileinfo out-of-bounds memory access
--FILE--
<?php
	$test_file = "bug68735.jpg";
	$f = new finfo;

	var_dump($f->file($test_file));

?>
===DONE===
--EXPECTF--
string(%d) "JPEG image data, JFIF standard 1.01, resolution (DPI), density 180x52, segment length 16, comment: "%S""
===DONE===
