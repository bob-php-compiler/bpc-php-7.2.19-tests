--TEST--
Constant expressions with empty dimension fetch on coalesce
--SKIPIF--
skip not support Null Coalescing Operator ??
--FILE--
<?php

const A = [][] ?? 1;

?>
--EXPECTF--
Fatal error: Cannot use [] for reading in %s.php on line %d
