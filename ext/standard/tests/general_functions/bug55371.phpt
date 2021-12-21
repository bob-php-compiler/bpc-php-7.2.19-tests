--TEST--
Bug #55371 (get_magic_quotes_gpc() and get_magic_quotes_runtime() throw deprecated warning)
--SKIPIF--
skip no ini magic_quotes_gpc
--FILE--
<?php

get_magic_quotes_gpc();
get_magic_quotes_runtime();

?>
--EXPECT--
