--TEST--
errmsg: only variables can be passed by reference
--FILE--
<?php

function foo (&$var) {
}

foo(1);

echo "Done\n";
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line %d
 -- compile-error
