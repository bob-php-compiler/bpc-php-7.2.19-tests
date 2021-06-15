--TEST--
Testing eval function
--SKIPIF--
skip no eval()
--FILE--
<?php
error_reporting(0);
$a="echo \"Hello\";";
eval($a);
?>
--EXPECT--
Hello
