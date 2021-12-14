--TEST--
Testing stream_get_meta_data() "unread_bytes" field
--FILE--
<?php

$filename = 'stream_get_meta_data_file_variation2.php.tmp';

$fp = fopen($filename, "w+");

echo "Write some data to the file:\n";
$i = 0;
while ($i++ < 20) {
	fwrite($fp, "a line of data\n");
}

var_dump(stream_get_meta_data($fp));

//seek to start of file
rewind($fp);

echo "\n\nRead a line of the file, causing data to be buffered:\n";
var_dump(fgets($fp));

var_dump(stream_get_meta_data($fp));

echo "\n\nRead 20 bytes from the file:\n";
fread($fp, 20);

var_dump(stream_get_meta_data($fp));

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


Read a line of the file, causing data to be buffered:
string(15) "a line of data
"
bool(false)


Read 20 bytes from the file:
bool(false)


Read entire file:
bool(false)
