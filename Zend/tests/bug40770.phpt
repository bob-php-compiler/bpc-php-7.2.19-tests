--TEST--
Bug #40770 (Apache child exits when PHP memory limit reached)
--INI--
memory_limit=8M
--FILE--
<?php
ini_set('display_errors',true);
$mb=148;
$var = '';
for ($i=0; $i<=$mb; $i++) {
        $var.= str_repeat('a',1*1024*1024);
}
?>
--EXPECTF--
Fatal error: GC Warning: Out of Memory! Heap size: 6 MiB. Returning NULL! in %s on line %d
