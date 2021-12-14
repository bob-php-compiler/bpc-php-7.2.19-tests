--TEST--
Bug #61115: Stream related segfault on fatal error in php_stream_context_del_link - variation 1
--FILE--
<?php

$fileResourceTemp = fopen('php://temp', 'wr');
stream_context_get_options($fileResourceTemp);
var_dump(ftruncate($fileResourceTemp, PHP_INT_MAX));
?>
--EXPECTF--
Warning: stream_context_get_options(): supplied resource is not a valid Stream-Context resource in %s on line %d
bool(false)
