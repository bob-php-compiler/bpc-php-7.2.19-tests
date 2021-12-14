--TEST--
Testing stream_get_meta_data() on a process stream.
--FILE--
<?php

$cmd = "echo here is some output";
$mode = 'rb';
$handle = popen($cmd, $mode);
$data = fread($handle, 100);

var_dump(stream_get_meta_data($handle));

pclose($handle);

echo "Done";

?>
--EXPECT--
bool(false)
Done
