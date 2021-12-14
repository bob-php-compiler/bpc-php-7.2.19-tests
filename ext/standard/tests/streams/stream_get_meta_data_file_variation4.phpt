--TEST--
stream_get_meta_data() with a relative file path
--FILE--
<?php

echo "Create a file:\n";
$filename = getcwd() . '/stream_get_meta_data_file_variation4.php.tmp';
$fp = fopen($filename, 'w+');

var_dump(stream_get_meta_data($fp));

fclose($fp);

echo "\nChange to file's directory and open with a relative path:\n";

$dirname = dirname($filename);
chdir($dirname);
$relative_filename = basename($filename);

$fp = fopen($relative_filename, 'r');
var_dump(stream_get_meta_data($fp));

fclose($fp);

unlink($filename);

?>
--EXPECTF--
Create a file:
bool(false)

Change to file's directory and open with a relative path:
bool(false)
