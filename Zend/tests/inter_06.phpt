--TEST--
Trying use name of an internal class as interface name
--FILE--
<?php

interface stdClass { }

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot declare class stdClass, because the name is already in use in %s on line %d
 -- compile-error
