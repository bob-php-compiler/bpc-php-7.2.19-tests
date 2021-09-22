--TEST--
Invalid numeric string E_WARNINGs and E_NOTICEs, combined assignment operations
--FILE--
<?php

// prevents CT eval
function foxcache($val) {
    return array($val)[0];
}

try {
    $a = foxcache("minim");
    $a %= "veniam,";
    var_dump($a);
} catch (DivisionByZeroError $e) {
}

?>
--EXPECTF--
A non-numeric value encountered
*** ERROR:compile-error:
Error: Modulo by zero in %s on line %d
 -- compile-error
