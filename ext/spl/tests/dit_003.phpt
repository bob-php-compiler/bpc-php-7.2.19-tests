--TEST--
SPL: FilesystemIterator and foreach
--FILE--
<?php
$count = 0;
foreach(new FilesystemIterator('.') as $ent)
{
	++$count;
}
var_dump($count > 0);
?>
===DONE===
--EXPECTF--
bool(true)
===DONE===
