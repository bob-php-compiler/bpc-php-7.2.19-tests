--TEST--
next - ensure warning is received when passing an indirect temporary.
--FILE--
<?php
function f() {
    return array(1, 2);
}
var_dump(next(f()));
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line %d
 -- compile-error
