--TEST--
Bug #74093 (Maximum execution time of n+2 seconds exceed not written in error_log)
--SKIPIF--
skip no ini hard_timeout
--INI--
memory_limit=1G
max_execution_time=1
hard_timeout=1
--FILE--
<?php
$a1 = range(1, 1000000);
$a2 = range(100000, 1999999);
array_intersect($a1, $a2);
?>
--EXPECTF--
Fatal error: Maximum execution time of 1+1 seconds exceeded %s
