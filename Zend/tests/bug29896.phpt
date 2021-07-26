--TEST--
Bug #29896 (Backtrace argument list out of sync)
--FILE--
<?php
function userErrorHandler($num, $msg, $file, $line)
{
    debug_print_backtrace();
}

$OldErrorHandler = set_error_handler("userErrorHandler");

function GenerateError1($A1)
{
    $a = $s[0];
}

function GenerateError2($A1)
{
    GenerateError1("Test1");
}

GenerateError2("Test2");
?>
--EXPECTF--
#0  usererrorhandler(8, 'Undefined offse...', '%s...', 11) called at [%sbug29896.php:11]
#1  generateerror1('Test1') called at [%sbug29896.php:16]
#2  generateerror2('Test2') called at [%sbug29896.php:19]
