--TEST--
Test FILEINFO_EXTENSION flag
--FILE--
<?php

$f = new finfo;
var_dump($f->file("./resources/test.jpg", FILEINFO_EXTENSION));

?>
===DONE===
--EXPECT--
string(17) "jpeg/jpg/jpe/jfif"
===DONE===
