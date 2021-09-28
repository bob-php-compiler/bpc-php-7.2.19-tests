--TEST--
unset() CV 2 (unset() global variable in $GLOBALS)
--FILE--
<?php
$x = "ok\n";
echo $x;
unset($GLOBALS["x"]);
var_dump($x);
?>
--EXPECTF--
ok
NULL
