--TEST--
Bug #43216 (stream_is_local() returns false on file://)
--SKIPIF--
skip TODO stream_is_local()
--FILE--
<?php
var_dump(stream_is_local("file://"));
?>
--EXPECT--
bool(true)
