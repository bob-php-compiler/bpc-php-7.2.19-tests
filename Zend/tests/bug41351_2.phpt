--TEST--
Bug #41351 (Invalid opcode with foreach ($a[] as $b)) - 2
--FILE--
<?php

$a = array();

foreach($a[]['test'] as $b) {
}

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use [] for reading in %s on line %d
 -- compile-error
