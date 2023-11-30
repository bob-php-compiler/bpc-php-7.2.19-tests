--TEST--
Object naming collision error: class/trait
--FILE--
<?php

class A { }
trait A { }

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot declare trait A, because the name is already in use in %s on line %d
 -- compile-error
