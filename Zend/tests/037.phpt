--TEST--
Trying to access inexistent static property of Closure
--FILE--
<?php

class closure { static $x = 1;}

?>
--EXPECTF--
*** ERROR:compile-error:
Error: Cannot declare class closure, because the name is already in use in %s on line 3
 -- compile-error
