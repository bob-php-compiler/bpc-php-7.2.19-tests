--TEST--
unset() CV 1 (unset() global variable)
--FILE--
<?php
$x = "ok\n";
echo $x;
unset($x);
var_dump($x);
?>
--EXPECTF--
ok
NULL
