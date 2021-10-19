--TEST--
Bug #70239 Creating a huge array doesn't result in exhausted, but segfault, var 1
--FILE--
<?php
range(0, pow(2.0, 100000000));
?>
===DONE===
--EXPECTF--
Warning: range(): Invalid range supplied: start=0.0 end=+inf.0 in %srange_bug70239_0.php on line %d
===DONE===
