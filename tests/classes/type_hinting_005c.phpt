--TEST--
Check type hint compatibility in overrides with array hints.
--FILE--
<?php
class SomeClass {}

Class C { function f(SomeClass $a) {} }

echo "Array hint, should be class.\n";
Class D extends C { function f(array $a) {} }
?>
==DONE==
--EXPECTF--
Warning: Declaration of D::f(array $a) should be compatible with C::f(SomeClass $a) in %s on line 7
Array hint, should be class.
==DONE==
