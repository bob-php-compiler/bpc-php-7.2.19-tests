--TEST--
Bug #67516 wrong mimetypes with finfo_file(filename, FILEINFO_MIME_TYPE)
--FILE--
<?php

$f = new finfo;
var_dump($f->file("bug67516.gif", FILEINFO_MIME_TYPE));
var_dump($f->file("bug67516.gif", FILEINFO_MIME));
?>
===DONE===
--EXPECT--
string(9) "image/gif"
string(25) "image/gif; charset=binary"
===DONE===
