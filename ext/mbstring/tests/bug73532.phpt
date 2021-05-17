--TEST--
Bug #73532 (Null pointer dereference in mb_eregi)
--SKIPIF--
skip mbstring regex,kana,http,mail
--FILE--
<?php
var_dump(mb_eregi("a", "\xf5"));
?>
--EXPECT--
bool(false)
