--TEST--
Bug #57547 Settings options on file doesn't give same result as constructor options
--FILE--
<?php

$filenames = array("..", 'bug57547.php');

foreach ($filenames as $filename) {
	$finfo = new finfo(FILEINFO_MIME);
	var_dump($finfo->file($filename));

	$finfo2 = new finfo();
	var_dump($finfo2->file($filename, FILEINFO_MIME));
}

?>
===DONE===
--EXPECT--
string(9) "directory"
string(9) "directory"
string(28) "text/x-php; charset=us-ascii"
string(28) "text/x-php; charset=us-ascii"
===DONE===
