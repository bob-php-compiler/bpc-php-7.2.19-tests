--TEST--
Bug #72107: Segfault when using func_get_args as error handler
--FILE--
<?php
set_error_handler('func_get_args');
function test($a) {
    $arr = array();
    echo $arr[0];
}
test(1);
?>
--EXPECTF--
Notice: Undefined offset: 0 in tests/bug72107.php on line 5
