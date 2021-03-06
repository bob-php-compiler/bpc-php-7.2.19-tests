--TEST--
Test octdec() - wrong params  test octdec()
--FILE--
<?php
/* Prototype  : number octdec  ( string $octal_string  )
 * Description: Returns the decimal equivalent of the octal number represented by the octal_string  argument.
 * Source code: ext/standard/math.c
 */

echo "*** Testing octdec() :  error conditions ***\n";

// get a class
class classA
{
}

echo "\n-- Incorrect input --\n";
octdec(new classA());


?>
--EXPECTF--
*** Testing octdec() :  error conditions ***

-- Incorrect input --

Recoverable fatal error: Object of class classA could not be converted to string in %s on line %d
