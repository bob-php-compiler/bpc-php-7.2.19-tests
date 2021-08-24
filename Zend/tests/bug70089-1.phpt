--TEST--
Bug #70089 (segfault in PHP 7 at ZEND_FETCH_DIM_W_SPEC_VAR_CONST_HANDLER ())
--INI--
opcache.enable=0
--FILE--
<?php
function runtimetest(&$a) {}
runtimetest(chr(0)[0]);
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line 3
 -- compile-error
