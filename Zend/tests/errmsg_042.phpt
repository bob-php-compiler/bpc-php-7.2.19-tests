--TEST--
errmsg: key element cannot be a reference
--FILE--
<?php

$a = array(1,2,3);
foreach ($a as &$k=>$v) {
}

echo "Done\n";
?>
--EXPECTF--
Parse error: %s in %s on line %d
