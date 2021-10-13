--TEST--
unset() CV 9 (unset() of global variable in array_pop($GLOBALS))
--FILE--
<?php
$x = "ok\n";
echo array_pop($GLOBALS);
var_dump($x);
echo "ok\n";
?>
--EXPECTF--
Warning: bpc not support array_pop($GLOBALS) in %s on line %d
string(3) "ok
"
ok
