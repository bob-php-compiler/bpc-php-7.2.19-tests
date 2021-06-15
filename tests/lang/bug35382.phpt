--TEST--
Bug #35382 (Comment in end of file produces fatal error)
--SKIPIF--
skip no eval()
--FILEEOF--
<?php
eval("echo 'Hello'; // comment");
echo " World";
//last line comment
--EXPECTF--
Hello World
