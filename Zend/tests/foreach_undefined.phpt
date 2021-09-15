--TEST--
foreach() & undefined var
--FILE--
<?php

$a = array();
foreach($a[0] as $val);

echo "Done\n";
?>
--EXPECTF--
Notice: Undefined offset: 0 in %s on line %d

Warning: Invalid argument supplied for foreach() in %s on line %d
Done
