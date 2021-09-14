--TEST--
errmsg: can't use [] for reading
--FILE--
<?php

$a = array();
$b = $a[];

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use [] for reading in %s on line %d
 -- compile-error
