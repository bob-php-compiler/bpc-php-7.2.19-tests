--TEST--
zend_strtod() hangs with 2.2250738585072011e-308
--FILE--
<?php
$d = 2.2250738585072011e-308;

echo "Done\n";
?>
--EXPECTF--
Warning: truncate literal float '2.2250738585072011e-308' to '2.225073858507201e-308', use string may avoid truncate
Done
