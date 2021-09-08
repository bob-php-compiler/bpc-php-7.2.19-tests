--TEST--
Bug #72162 (use-after-free - error_reporting)
--FILE--
<?php
error_reporting(E_ALL);
$var11 = new StdClass();
$var16 = error_reporting($var11);
?>
--EXPECTF--
Notice: Object of class stdClass could not be converted to int in %sbug72162.php on line %d
