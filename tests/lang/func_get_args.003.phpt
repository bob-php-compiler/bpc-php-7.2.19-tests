--TEST--
func_get_args() outside of a function declaration
--FILE--
<?php

var_dump(func_get_args());

?>
--EXPECTF--
*** ERROR:compile-error:
Error: func_get_args():  Called from the global scope - no function context in %s on line 3
 -- compile-error
