--TEST--
Test array_shift() function : usage variations - call recursively
--FILE--
<?php
/* Prototype  : mixed array_shift(array &$stack)
 * Description: Pops an element off the beginning of the array
 * Source code: ext/standard/array.c
 */

/*
 * Use the result of one call to array_shift
 * as the $stack argument of another call to array_shift()
 * When done in one statement causes strict error messages.
 */

echo "*** Testing array_shift() : usage variations ***\n";

$stack = array ( array ( array ('zero', 'one', 'two'), 'un', 'deux'), 'eins', 'zwei');

// not following strict standards
echo "\n-- Incorrect Method: --\n";
var_dump(array_shift(array_shift(array_shift($stack))));

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Only variables can be passed by reference in %s on line %d
 -- compile-error
