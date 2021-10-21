--TEST--
Test octdec() - wrong params  test octdec()
--FILE--
<?php
/* Prototype  : number octdec  ( string $octal_string  )
 * Description: Returns the decimal equivalent of the octal number represented by the octal_string  argument.
 * Source code: ext/standard/math.c
 */

echo "*** Testing octdec() :  error conditions ***\n";

echo "\n-- Incorrect number of arguments --\n";
octdec();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Too few arguments to function octdec(): 1 required, 0 provided in %s on line %d
 -- compile-error
