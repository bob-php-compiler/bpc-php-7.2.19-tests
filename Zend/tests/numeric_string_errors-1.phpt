--TEST--
Invalid numeric string E_WARNINGs and E_NOTICEs
--FILE--
<?php

try {
    var_dump("minim" % "veniam,");
} catch (DivisionByZeroError $e) {
}

?>
--EXPECTF--
A non-numeric value encountered
*** ERROR:compile-error:
Error: Modulo by zero in %s on line %d
 -- compile-error
