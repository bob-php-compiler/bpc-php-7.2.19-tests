--TEST--
Bug #45392 (ob_start()/ob_end_clean() and memory_limit)
--INI--
display_errors=On
--SKIPIF--
<?php
if (getenv("USE_ZEND_ALLOC") === "0") {
    die("skip Zend MM disabled");
}
--FILE--
<?php
echo __LINE__ . "\n";
ini_set('memory_limit', 100);
ob_start();
$i = 0;
while($i++ < 5000)  {
  echo str_repeat("may not be displayed ", 42);
}
ob_end_clean();
?>
--EXPECTF--
2

Fatal error: GC Warning: Out of Memory! Heap size: %d MiB. Returning NULL! in %s on line 7
%s
