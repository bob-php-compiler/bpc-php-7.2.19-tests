--TEST--
stream_get_meta_data() basic functionality
--FILE--
<?php

$fp = fopen('/proc/self/comm', "r");

var_dump(stream_get_meta_data($fp));

fclose($fp);

?>
--EXPECTF--
bool(false)
