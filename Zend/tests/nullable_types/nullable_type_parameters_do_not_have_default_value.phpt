--TEST--
Explicit nullable types do not imply a default value
--FILE--
<?php

function f(?callable $p) {}

f();
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function f(): 1 required, 0 provided in %s on line %d
 -- compile-error
