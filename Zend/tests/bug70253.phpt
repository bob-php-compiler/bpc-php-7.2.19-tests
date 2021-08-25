--TEST--
Bug #70253 (segfault at _efree () in zend_alloc.c:1389)
--INI--
memory_limit=2M
--SKIPIF--
skip invalid test
--FILE--
<?php
unserialize('a:2:{i:0;O:9:"000000000":10000000');
?>
--EXPECTF--
Fatal error: Allowed memory size of 2097152 bytes exhausted%s(tried to allocate %d bytes) in %s on line %d
