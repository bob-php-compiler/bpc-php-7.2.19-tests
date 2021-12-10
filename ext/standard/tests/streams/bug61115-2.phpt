--TEST--
Bug #61115: Stream related segfault on fatal error in php_stream_context_del_link - variation 2
--SKIPIF--
skip TODO support STREAM_CLIENT_PERSISTENT
--FILE--
<?php
stream_socket_client('abc', $var, $var, 0, STREAM_CLIENT_PERSISTENT);

?>
==DONE==
--EXPECT--
==DONE==
