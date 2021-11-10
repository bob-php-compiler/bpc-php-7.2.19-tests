--TEST--
Bug #68797 Number 2.2250738585072012e-308 converted incorrectly
--INI--
precision=17
--FILE--
<?php

echo 2.2250738585072012e-308, "\n";
?>
==DONE==
--EXPECT--
Warning: truncate literal float '2.2250738585072012e-308' to '2.2250738585072014e-308', use string may avoid truncate
2.2250738585072014E-308
==DONE==
