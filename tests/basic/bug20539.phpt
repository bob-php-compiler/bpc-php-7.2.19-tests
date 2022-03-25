--TEST--
Bug #20539 (PHP CLI Segmentation Fault)
--INI--
session.auto_start=1
session.save_handler=files
session.save_path=.
--FILE--
<?php
	print "good :)\n";
	$filename = 'sess_' . session_id();
	var_dump(file_exists($filename));
	@unlink($filename);
?>
--EXPECT--
good :)
bool(true)
