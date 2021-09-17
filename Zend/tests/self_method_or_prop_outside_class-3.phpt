--TEST--
Accessing self:: properties or methods outside a class
--FILE--
<?php

$fn = function() {
    $str = "foo";
    try {
        self::{$str . "bar"}();
    } catch (Error $e) {
        echo $e->getMessage(), "\n";
    }
};
$fn();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot access self:: when no class scope is active in %s on line %d
 -- compile-error
