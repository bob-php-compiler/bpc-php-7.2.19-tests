--TEST--
instanceof self outside a class
--FILE--
<?php

$fn = function() {
    try {
        new stdClass instanceof self;
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
