--TEST--
stream_get_meta_data() with differing file access modes
--FILE--
<?php

// array of all file access modes
$filemodes = array('r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+',
                   'rb', 'rb+', 'wb', 'wb+', 'ab', 'ab+', 'xb', 'xb+',
                   'rt', 'rt+', 'wt', 'wt+', 'at', 'at+', 'xt', 'xt+');

//create a file
$filename = 'stream_get_meta_data_file_variation1.php.tmp';
$fp = fopen($filename, 'w+');
fclose($fp);

// open file in each access mode and get meta data
foreach ($filemodes as $mode) {
	if (strncmp($mode, 'x', 1) == 0) {
		// x modes require that file does not exist
		unlink($filename);
	}
	$fp = fopen($filename, $mode);
	var_dump(stream_get_meta_data($fp));
	fclose($fp);
}

unlink($filename);

?>
--EXPECTF--
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
bool(false)
