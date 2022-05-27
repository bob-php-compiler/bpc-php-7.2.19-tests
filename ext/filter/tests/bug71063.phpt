--TEST--
Bug #71063 (filter_input(INPUT_ENV, ..) does not work)
--INI--
variables_order=E
--FILE--
<?php
var_dump($_ENV['PATH']);
var_dump(filter_input(INPUT_ENV, 'PATH'));
?>
--EXPECTF--
string(%d) "%s"
string(%d) "%s"
