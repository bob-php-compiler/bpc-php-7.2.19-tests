--TEST--
Bug #55705 (Omitting a callable typehinted argument causes a segfault)
--FILE--
<?php
function f(callable $c) {}
f();
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function f(): 1 required, 0 provided in %s on line 3
 -- compile-error
