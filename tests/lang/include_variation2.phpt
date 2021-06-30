--TEST--
Including a file in the current script directory from an included function
--ARGS--
--bpc-include-file tests/lang/include_files/function.inc --bpc-include-file tests/lang/include_files/echo.inc
--FILE--
<?php
require_once 'include_files/function.inc';
test();
?>
--EXPECT--
Included!
