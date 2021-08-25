--TEST--
Bug #71221 (Null pointer deref (segfault) in get_defined_vars via ob_start)
--FILE--
<?php
ob_start("get_defined_vars");
ob_end_clean();
?>
okey
--EXPECTF--
Warning: Cannot call get_defined_vars() dynamically in %s on line %d
okey
