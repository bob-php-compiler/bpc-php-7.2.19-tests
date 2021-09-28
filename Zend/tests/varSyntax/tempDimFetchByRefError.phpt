--TEST--
Passing a dimension fetch on a temporary by reference is not allowed
--FILE--
<?php

function f(&$ref) {}
f(array(0, 1)[0]);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line 4
 -- compile-error
