--TEST--
Function redeclaration must produce a simple fatal
--FILE--
<?php
function f() {}
function f() {}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot redeclare f() (previously declared in %s:%d) in %s on line %d
 -- compile-error
