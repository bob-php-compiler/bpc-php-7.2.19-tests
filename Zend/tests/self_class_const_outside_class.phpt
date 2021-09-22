--TEST--
Accessing self::FOO in a free function
--FILE--
<?php
function test() {
    var_dump(self::FOO);
}
?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot access self:: when no class scope is active in %s on line %d
 -- compile-error
