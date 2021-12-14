--TEST--
stream_get_meta_data() on directories
--FILE--
<?php

$dir = opendir('.');
var_dump(stream_get_meta_data($dir));
closedir($dir);

$dirObject = dir('.');
var_dump(stream_get_meta_data($dirObject->handle));

?>
--EXPECT--
bool(false)
bool(false)
