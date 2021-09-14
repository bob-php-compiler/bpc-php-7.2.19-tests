--TEST--
errmsg: can't use [] for reading - 2
--FILE--
<?php

$a = array();
isset($a[]);

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use [] for reading in %s on line %d
 -- compile-error
