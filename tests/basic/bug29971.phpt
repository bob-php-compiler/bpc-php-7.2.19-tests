--TEST--
Bug #29971 (variables_order behaviour)
--INI--
variables_order=GPC
--FILE--
<?php
var_dump($_ENV,$_SERVER);
var_dump(ini_get("variables_order"));
?>
--EXPECTF--
array(%d) {
%a
}
array(%d) {
%a
}
bool(false)
