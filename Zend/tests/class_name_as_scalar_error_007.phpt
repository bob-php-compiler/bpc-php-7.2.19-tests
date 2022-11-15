--TEST--
Cannot access self::class when no class scope is active
--FILE--
<?php

var_dump(self::class);

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot use "self" when no class scope is active in %s on line 3
 -- compile-error
