--TEST--
testing stream_get_meta_data() "eof" field for a file stream
--FILE--
<?php

$filename = 'stream_get_meta_data_file_variation5.php.tmp';

$fp = fopen($filename, "w+");

echo "Write some data to the file:\n";
$i = 0;
while ($i++ < 20) {
	fwrite($fp, "a line of data\n");
}

var_dump(stream_get_meta_data($fp));

//seek to start of file
rewind($fp);

echo "\n\nRead entire file:\n";
while(!feof($fp)) {
	fread($fp, 1);
}

var_dump(stream_get_meta_data($fp));

fclose($fp);

unlink($filename);

?>
--EXPECTF--
Write some data to the file:
bool(false)


Read entire file:
bool(false)
