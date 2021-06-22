--TEST--
output buffering - failure
--FILE--
<?php
ob_start("str_rot13");
echo "foo\n";
// str_rot13 expects 1 param and warning when passed 2 params.
// It is invoked with 2 params when used as an OB callback.

ob_end_flush();

// Show the error.
print_r(error_get_last());
?>
--EXPECTF--
Warning: Too many arguments to function str_rot13(): 1 at most, 2 provided in %s on line 7
sbb
Array
(
    [type] => 2
    [message] => Too many arguments to function str_rot13(): 1 at most, 2 provided
    [file] => %s
    [line] => 7
)
