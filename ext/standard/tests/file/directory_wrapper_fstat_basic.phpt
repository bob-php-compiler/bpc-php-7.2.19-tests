--TEST--
Test function fstat() on directory wrapper
--FILE--
<?php
$d = '.';
$h = opendir($d);
var_dump(fstat($h));
closedir($h);
?>
===DONE===
--EXPECT--
bool(false)
===DONE===
