--TEST--
Testing func_get_args()
--FILE--
<?php

func_get_args();

?>
--EXPECTF--
*** ERROR:compile-error:
Error: func_get_args():  Called from the global scope - no function context in %s on line 3
 -- compile-error
