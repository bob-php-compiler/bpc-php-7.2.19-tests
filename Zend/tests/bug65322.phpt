--TEST--
Bug #65322: compile time errors won't trigger auto loading
--ARGS--
--bpc-include-file Zend/tests/bug65322.inc
--FILE--
<?php

spl_autoload_register(function($class) {
    var_dump($class);
    class X {}
});

set_error_handler(function($_, $msg, $file) {
    var_dump($msg, $file);
    new X;
});

include 'bug65322.inc';

?>
--EXPECTF--
string(62) "Declaration of B::test($a) should be compatible with A::test()"
string(%d) "tests/bug65322.inc"
string(1) "X"
