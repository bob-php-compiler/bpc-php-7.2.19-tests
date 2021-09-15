--TEST--
GC 034: GC in request shutdown and resource list destroy
--FILE--
<?php
/* run with valgrind */
$a = array(fopen('/proc/self/comm', 'r'));
$a[] = &$a;
?>
==DONE==
--EXPECT--
==DONE==
