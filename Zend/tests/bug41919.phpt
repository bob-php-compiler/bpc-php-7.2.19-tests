--TEST--
Bug #41919 (crash in string to array conversion)
--FILE--
<?php
$foo="50";
$foo[3]->bar[1] = "bang";

echo "ok\n";
?>
--EXPECTF--
Recoverable fatal error: Object of class stdClass could not be converted to string in %sbug41919.php on line 3
